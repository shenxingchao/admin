<?php
/**
 * Created by PhpStorm.
 * User: 86431
 * Date: 2017/7/11
 * Time: 12:49
 */

namespace app\admin\controller;
use think\Controller;
use think\Config;
use think\Db;

/**
 * name 基类控制器
 * Class Base
 * @package app\admin\controller
 */
class Base extends  Controller{
    protected function _initialize()
    {
        //验证admin是否登录
        if(session('admin')==null)
            $this->error("请先登录",'admin/User/login');
        //读取面包屑导航
        Config::load(APP_PATH.'/admin/conf/breadcrumb.php');
        $privilege =Config::get('breadcrumb');
        $url = $_SERVER['REQUEST_URI'];
        foreach ($privilege as $key=>$value){
            $match = $value['control']."/".$value['action'];
            if(strpos($url,$match)){
                $this->assign('control',$value['control_name']);
                $this->assign('action',$value['action_name']);
            }
        }
        $this->privilege_check($url);
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    /**
     * 权限验证
     * @param $url
     */
    public function privilege_check($url){
        //获取权限
        if(session('privilege_src')==null){
            $admin = session('admin');
            $admin_role = Db::name('admin_role')->where(['id'=>$admin['role_id']])->find();
            //获取权限资源
            $privilege_src = Db::name('privilege_src')->where(['id'=>['in',$admin_role['privilege_id']]])->select();
            session('privilege_src',$privilege_src);
        }
        $privilege_src = session('privilege_src');
        $flag = false;
        $url = strtolower($url);
        foreach ($privilege_src as $key=>$value){
            $match = strtolower($value['controller_name']."/".$value['action_name']);
            if(strpos($url,$match)!==false){
                $flag = true;
                break;
            }
        }
        if(!$flag)
            $this->error("您没有此操作权限",'');
    }
}