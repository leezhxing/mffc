<?php

//定义PUBLIC_PATH

define('PUBLIC_PATH', __DIR__);

date_default_timezone_set("PRC");

/* 当行注释*/

//加载启动器

require PUBLIC_PATH.'/../bootstrap.php';

//路由配置、开始处理

require BASE_PATH.'/config/routes.php';

