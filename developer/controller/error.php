<?php

/**
 *
 * CHKN Framework PHP
 * Copyright 2015 Powered by Percian Joseph C. Borja
 * Created May 12, 2015
 * Class Error
 * Holds the function that will load error page when there is no class or function found
 * $this->html calls the maintenance template
 * $this->html->assign assigns value for variable DEFAULT_PATH
 */
class error extends Controller{
	public function error_page(){
        $this->path(TEMPLATE_PATH.'error.tpl');
		$this->assign('DEFAULT_TITLE','Error');
		$this->assign('DEFAULT_PATH',DEFAULT_URL);
		$this->show();
	}
}
