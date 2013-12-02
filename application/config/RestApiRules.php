<?php
/*
**rest API配置
design By HJtianling_LXY,<2507073658@qq.com>
2013.11.16
*/

return array(
		array(
				'pattern'=>'<_m:(user)>/<_a:(CreditGrade)>/',
				'<_m>/service/get<_a>',
				'verb'=>'POST'
			),

		array(
				'pattern'=>'<_m:(user)>/<_a:(UserMessage)>',
				'<_m>/service/create<_a>',
				'verb'=>'POST'
			),

		array(
				'pattern'=>'<_m:(appservice)>/<_a:(login|logout)>',
				'<_m>/appUser/<_a>',
				'verb'=>'POST'
			),

		array(
				'pattern'=>'<_m:(appservice)>/<_a:(register)>',
				'<_m>/appUser/<_a>',
				'verb'=>'POST'
			),
	);
?>