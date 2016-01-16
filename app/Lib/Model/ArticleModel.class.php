<?php
/**
 * Created by IntelliJ IDEA.
 * User: skyADMIN
 * Date: 16/1/16
 * Time: 下午11:50
 */
class ArticleModel extends Model{
    protected $_validate = array(
        array('title','require','标题必须'),
    );

    protected $_auto = array(
        array('publish_time','time',1,'function'),
    );
}