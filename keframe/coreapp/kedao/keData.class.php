<?php

/***********************************
 *Note:		:框架核心文件
 *Author	:Kermit
 *QQ		:956952515
 *note		:中国.山东.青岛
 *date		:2014-12

  keframe:可以做语言上的矮子，但要争做行动上的巨人。
 ***********************************/
 
interface KeData
{

   	/***********************************
		配置数据
	 ***********************************/
	
	public static function __config($config);


   	/***********************************
		取得实例化资源
	 ***********************************/

    public static function __getInstance($key);


   	/***********************************
		供外部检查配置
	 ***********************************/

    public static function __checkConfigIndex($key);


	
}