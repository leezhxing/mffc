<?php

class HomeController extends BaseController
{
	public function home()
	{
		
		/*$url = parse_url($_SERVER['REQUEST_URI']);
		$method = $_SERVER['REQUEST_METHOD'];
		echo '<pre>';
		var_export($method);
		var_export($url);
		echo '</pre>';*/
		#echo '<h1>控制器成功</h1>';
		#
		$this->view = View::make("home")->with('article', Article::first())
						->withTitle('MFFC : -D')
						->withFuckMe('OK!');

		//发邮件
		$this->mail = Mail::to(['532974019@qq.com'])
						->from('MontherFucker <leezhxing@163.com>')
						->title('hello')
						->content('<h1>HELLO~~~~~</h1>');
	}
}
