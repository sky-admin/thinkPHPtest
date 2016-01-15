<?php
/**
 * Created by IntelliJ IDEA.
 * User: skyADMIN
 * Date: 16/1/15
 * Time: 下午1:59
 */
class FormModel extends Model{
    protected $_validate = array(
        array('title','require','标题必须'),
    );

    protected $_auto = array(
        array('create_time','time',1,'function'),
    );
}