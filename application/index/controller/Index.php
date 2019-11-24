<?php
namespace app\index\controller;
use think\Controller;
class Index
{
    public function index()
    {
    	
        return 'hello world';
    }
    public function hello (){
    	dump(\think\config::get());
    }
}
