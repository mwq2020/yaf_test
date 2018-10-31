<?php

use Yaf\Controller_Abstract;
class IndexController extends Controller_Abstract 
{
    public function init() {
           $this->initView();
        }


	public function indexAction()
    {

        echo  $this->getView()->getScriptPath();
        echo "<hr>";


        $params = array(
               'name' => 'value',
           );

        // 模板变量赋值
        $this->getView()->assign($params)->assign("foo", "bar");

        // 获取模板变量的值
        echo $this->_view->get("name");
        echo "<hr>";

        echo $this->getView()->get("name");
        echo "<hr>";

        // 输出模板页面
        return $this->getView()->render("index/index.phtml");
	}

	public function pageAction()
	{
		echo "this is a test view  page";
		exit;
	}

}




