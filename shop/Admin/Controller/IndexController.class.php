<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();
	}
	
	function head(){
		$this->display();
	}
	
	function left(){
		$this->display();
	}
	function right(){
		$this->display();
	}
}