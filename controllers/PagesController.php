<?php

require_once("Smarty/Smarty.class.php");

class PagesController
{

  private $view;
  private $action;

  public function __construct()
  {
    $this->view = new Smarty();
    $this->view->template_dir = 'views/templates/pages/';
    $this->view->compile_dir = 'views/templates_c/pages/';
  }

  public function indexAction()
  {
    $this->view->display('index.tpl');
  }

  public function contactAction()
  {
    $this->view->display('contact.tpl');
  }

  public function aboutAction()
  {
    $this->view->display('about.tpl');
  }

  public function successAction()
  {
    $this->view->display('success.tpl');
  }

  public function failureAction()
  {
    $this->view->display('failure.tpl');
  }

  // BaseControllerに記述するか？
  public function setAction($actionName)
  {
    $this->action = $actionName;
  }
  public function run()
  {
    try {
      indexAction();
    } catch(Exception $e) {
    }
  }
}

?>
