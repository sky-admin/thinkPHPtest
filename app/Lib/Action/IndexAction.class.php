<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $Data = M('Article');
        $list = $Data->order('publish_time DESC')->select();
        $this->assign('list',$list);
        $this->display();
	}
}