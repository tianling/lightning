<?php
/**
 * @name SiteController.php
 * @author lancelot <lancelot1215@gmail.com>
 * Date 2013-11-24 
 * Encoding UTF-8
 */
class SiteController extends Controller{
	public function noneLoginRequired(){
		return 'index,cashCaculator,guide';
	}
	
	public function actionIndex(){
		$content = $this->app->getModule('content')->getComponent('contentManager');
		$cache = $this->app->cache;
		
		$banner = $cache->get('SITE_BANNER');
		if ( $banner === false ){
			$banner = $content->getInUsingBanner(0);
			$cache->set('SITE_BANNER',$banner,24*3600);                                                                           
		}
		
		$articles = $cache->get('INDEX_ARTICLES');
		if ( $articles === false ){
			$articlesProvider = $content->getArticleProviderViaType(array(
					'criteria' => array(
							'order' => 'add_time DESC',
							'limit' => 5,
							'offset' => 0
					)
			),0);
			$articles = $articlesProvider->getData();
			foreach ( $articles as $i => $article ){
				$articles[$i]->content = str_replace('&nbsp;',' ',preg_replace('/(.*)<.*>(.*)/iU','$1$2',$article->content));
			}
			$cache->set('INDEX_ARTICLES',$articles,6*3600);
		}
		
		$bidData = $cache->get('INDEX_BIDS_');
		if ( empty($bidData) ){
			$bidManager = $this->app->getModule('tender')->getComponent('bidManager');
			$bids = $bidManager->getBidList(array(
					'condition' => 'verify_progress=21 AND start<=:start',
					'limit' => 5,
					'offset' => 0,
					'order' => 'pub_time DESC',
					'params' => array(':start'=>time()),
					'with' => array(
							'user' => array(
									'with' => array(
											'icons' => array(
													'condition' => 'in_using=1'
											)
									)
							),
					)
			));
			$bidData = array();
			$userManager = $this->app->getModule('user')->getComponent('userManager');
			$userCreditManager = $this->app->getModule('credit')->getComponent('userCreditManager');
			
			foreach ( $bids as $bid ){
				$uid = $bid->user_id;
				$icons = $bid->user->icons;
				$iconName = empty($icons) ? null : $icons[0]->file_name;
				$icon = $userManager->resolveIconUrl($iconName,$iconName === null ? null : $uid);
				$rank = $userCreditManager->UserLevelCaculator($bid->user->credit_grade);
				
				$bidData[] = array(
						'id' => $bid->id,
						'userId' => $uid,
						'userIcon' => $icon,
						'title' => $bid->title,
						'monthRate' => ($bid->month_rate / 100),
						'rank' => $rank,
						'sum' => '￥'.number_format($bid->sum / 100,2),
						'deadline' => $bid->deadline,
						'progress' => $bid->progress / 100
				);
			}
			$cache->set('INDEX_BIDS_',$bidData,300);
		}
		
		$this->cs->registerCssFile($this->cssUrl.'index.css');
		$this->cs->registerScriptFile($this->scriptUrl.'slide_fade.js',CClientScript::POS_END);
		$this->render('index',array('banner'=>$banner,'articles'=>&$articles,'bids'=>$bidData));
	}

	/*
	**理财计算器
	*/
	public function actionCashCaculator(){
		$uid = $this->user->id;
		$onLoan = '10';
		$level = 'C';
		$levelData = Yii::app()->getModule('credit')->userCreditManager->userLevelList();

		if(!empty($uid)){
			$userCreditLevel = $this->app->getModule('credit')->userCreditManager->getUserCreditLevel($uid);
			if($userCreditLevel !== null){
				$level = $userCreditLevel;
			}
			
			$onLoan = '10';
		}
		$this->render('cashCaculator',array('uid'=>$uid,'onLoan'=>$onLoan,'level'=>$level,'levelData'=>$levelData));
	}
	
	public function actionGuide(){
		$this->layout = false;
		$this->render('guide');
	}

}
