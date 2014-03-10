<?php

class Controller_Sample1 extends Controller_Template{
	public function action_index(){
		return Response::forge(View::forge('sample1/index'));
	}
}
