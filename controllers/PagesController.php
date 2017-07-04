<?php

require_once("Smarty/Smarty.class.php");

class PagesController
  {

  private $view;

  public function __construct()
  {
    $this->view = new Smarty();
    $this->view->template_dir = '../views/templates/pages/' 
  }

  public function indexAction()
  {
    $this->view->display('index.tpl');
  }

  public function contactAction()
  {
    $this->view->display('contact.tpl');
  }
}

?>
