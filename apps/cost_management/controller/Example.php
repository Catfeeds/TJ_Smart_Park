<?php
// cost_management模块前台控制器

namespace app\cost_management\controller;
use app\home\controller\Home;

class Example extends Home {

    /**
     * 初始化
     * @return [type] [description]
     */
    function _initialize()
    {
        parent::_initialize();

    }   

    /**
     * 入口操作
     */
    public function index() {

        $this->pageInfo('首页','index');

        return $this->fetch();
    }

}