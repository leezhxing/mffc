<?php

//定义PUBLIC_PATH
/* 我是测试分支 */
define('PUBLIC_PATH', __DIR__);

date_default_timezone_set("PRC");

//加载启动器

require PUBLIC_PATH.'/../bootstrap.php';

//路由配置、开始处理

require BASE_PATH.'/config/routes.php';

/* 测试分支的开发工作，这个合并到dev分支下，然后当前分支的工作就完成了 */