<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <title>闪电贷</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->cssUrl;?>common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->cssUrl;?>guide.css" />
    <script type="text/javascript" src="<?php echo $this->scriptUrl;?>jquery-1.8.2.min.js"></script>
    <script type="text/javascript">
     var baseUrl = '<?php echo $this->app->getSiteBaseUrl();?>';
</script>  
</head>
<body>
	<div id="register" class="mask">
		<div class="shade">
			<div class="step center" id="step1">
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s1.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_1.png" />
					<p>浏览更畅快，投资理财更方便</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider1" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step2">
				<img src="<?php echo $this->imageUrl;?>guide_s2_h.png" id="guide-s2-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s2-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s2.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_2.png" />
					<p>操作流程简单易用，快速注册吧</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider2" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step3">
				<img src="<?php echo $this->imageUrl;?>guide_s3_h.png" id="guide-s3-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s3-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s3.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>请先到个人中心完善您的信用资料哦</p>
					<div>
						<a href="javascript:void(0);" class="step-last">> 继续</a>
					</div>
				</div>
				<div id="guider3" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
		</div>
	</div>
	<div id="borrow" class="mask">
		<div class="shade">
			<div class="step" id="step4">
				<img src="<?php echo $this->imageUrl;?>guide_s4_h.png" id="guide-s4-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s4-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s4.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>请先到个人中心完善您的信用资料哦</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider4" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step5">
				<img src="<?php echo $this->imageUrl;?>guide_s5_h.png" id="guide-s5-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s5-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s5.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>完善您的信息，越详细越好哦</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider5" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step6">
				<img src="<?php echo $this->imageUrl;?>guide_s6_h.png" id="guide-s6-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s6-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s6.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>审核期间，请您耐心等候</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider6" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step7">
				<img src="<?php echo $this->imageUrl;?>guide_s7_h.png" id="guide-s7-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s7-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s7.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>招标信息首页上有显示哦</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider7" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step8">
				<img src="<?php echo $this->imageUrl;?>guide_s8_h.png" id="guide-s8-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s8-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s8.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>招标完成后符合条件即可提现</p>
					<div>
						<a href="javascript:void(0);" class="step-last">> 继续</a>
					</div>
				</div>
				<div id="guider8" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
		</div>
	</div>
	<div id="lend" class="mask">
		<div class="shade">
			<div class="step" id="step9">
				<img src="<?php echo $this->imageUrl;?>guide_s9_h.png" id="guide-s9-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s9-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s9.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>在这里查看所有标段信息</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider9" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step10">
				<img src="<?php echo $this->imageUrl;?>guide_s10_h.png" id="guide-s10-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s10-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s10.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>筛选投资项目，让目的更加明确、清晰</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider10" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step11">
				<img src="<?php echo $this->imageUrl;?>guide_s11_h.png" id="guide-s11-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s11_t.png" id="guide-s11-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s11.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>最新标段，让您实时了解标段信息</p>
					<div>
						<a href="javascript:void(0);" class="step-last">> 继续</a>
					</div>
				</div>
				<div id="guider11" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
		</div>
	</div>
	<div id="lend-detail" class="mask">
		<div class="shade">
			<div class="step" id="step12">
				<img src="<?php echo $this->imageUrl;?>guide_s12_h.png" id="guide-s12-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s11_t.png" id="guide-s12-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s12.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_3.png" />
					<p>了解标段信息，使投资更保障</p>
					<div>
						<a href="javascript:void(0);" class="step-next">> 继续</a>
					</div>
				</div>
				<div id="guider12" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
			<div class="step" id="step13">
				<img src="<?php echo $this->imageUrl;?>guide_s13_h.png" id="guide-s13-h" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_s2_t.png" id="guide-s13-t" class="guide-t"/>
				<img src="<?php echo $this->imageUrl;?>guide_close.png" class="close"/>
				<div><img src="<?php echo $this->imageUrl;?>guide_s13.png" /></div>
				<div class="step-content">
					<img src="<?php echo $this->imageUrl;?>guide_s1_4.png" />
					<p>我们为您提供快捷、个性化服务</p>
					<div>
						<a href="<?php echo $this->createUrl('/site')?>" class="finish">> 立即体验</a>
					</div>
				</div>
				<div id="guider13" class="guider"><img src="<?php echo $this->imageUrl;?>guider.png" /></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo $this->scriptUrl;?>guide.js"></script>
</body>
</html>