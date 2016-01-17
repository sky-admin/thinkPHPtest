<?php
/**
 * Created by IntelliJ IDEA.
 * User: skyADMIN
 * Date: 16/1/16
 * Time: 下午11:56
 */
class ArticleAction extends Action{
    public function read($id = 0){
        $Data = D('Article');
        $data = $Data->find($id);
        if ($data) {
            $this->data = $data;
        } else {
            $this->error('数据错误');
        }
        $this->display();
    }
    public function insert(){
        $Form  = D('Article');
        if($Form->create()){
            $result = $Form->add();
            if($result){
                $this->success("操作成功!");
            }else{
                $this->error('写入错误!');
            }
        }else{
            $this->error($Form->getError());
        }
    }
}