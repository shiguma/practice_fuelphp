<?php

class Controller_Practice extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Practice &raquo; Index';
		$this->template->content = View::forge('practice/index', $data);
	}

}
