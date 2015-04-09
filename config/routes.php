<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/user/name', 'HomeController@home');

Macaw::get('/fuck', function(){

	$value = 'HeadFirstComponet';

	$replace = '$1'.'_'.'$2';

	echo strtolower(preg_replace('/(.)([A-Z])/', $replace, $value));
});

Macaw::get('/fuck', function(){
	echo '又成功了';
});
// Macaw::get('(:all)', function($fu){
// 	echo '未匹配到路由<br/>'.$fu;
// });

Macaw::$error_callback = function(){
	throw new Exception("路由无匹配项 404 Not Found");
};


//new add
//new line dev
//bubu
Macaw::dispatch();
