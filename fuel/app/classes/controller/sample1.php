<?php

class Controller_Sample1 extends Controller_Template{
	public function action_index(){
		$data = array();
		$data['title'] = 'サンプル１';
		$data['username'] = 'サポセン';
		return Response::forge(View::forge('sample1/index',$data));
	}
}
