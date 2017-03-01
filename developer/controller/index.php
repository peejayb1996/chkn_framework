<?php
class index extends Controller{
	public function index_page(){
		//Call index template
		$this->path(TEMPLATE_PATH.'index.tpl');
		//set default title
		$this->assign('DEFAULT_TITLE','CHKN Framework');
		//set css
		$this->assign('DEFAULT_STYLE',$this->view->Html_Objects('css',array(
            "homepage.css",
            "response.css"
		)));
		
		//set js
		$this->assign('DEFAULT_SCRIPT',$this->view->Html_Objects('js',array(
		)));

		// $da = $this->helper->add(array('users',array('username'=>"lex")));
        $data = $this->helper->defaults();
		// $data = $this->view->Html_Objects('page','homepage/index.php');
		$this->assign('DEFAULT_BODY',$data);
        $this->assign('DEFAULT_PATH',DEFAULT_URL);
		$this->show();
	}
}
