<?php
return array(
	//'配置项'=>'配置值'
	//  设置禁止访问的模块列表
	'MODULE_DENY_LIST' 		=> array('Common','Runtime'/*,'Api'*/),

	//	可以访问的模块
	'MODULE_ALLOW_LIST'     =>    array('Home','Admin','Api', 'App'),

	//	默认访问的模块
	'DEFAULT_MODULE'        =>    'Home',
);