<?php
namespace Api\Controller;
use Think\Controller;
class HomeController extends Controller {
    public function index(){
    	$this->show('Home  Api接口');
    }
}