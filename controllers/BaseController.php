<?php

abstract class BaseController
{
  protected $action = 'index';
  protected $view;
  //protected $request
  protected $templatePath;

  /*
   * コンストラクタ
   */
  require_once '../common/Request.php'
  public function __construct()
  {
    $this->request = new Request();
  }

  public function setAction($actionName)
  {
    $this->action = $actionName;
  }

  public function run()
  {
    try {
      // ビューの初期化
      $this->initView();
      // 共通の前処理
      $this->beforeAction();
    } catch(Exception $e) {
      // ログ出力等の処理を記述
    }
  }

  /*
   * ビューの初期化
   */
  protected function initView()
  {
    $this->view = new Smarty();
  
  }

  /*
   * 共通の前処理（オーバーライド前提）
   */
  protected function beforeAction()
  {
  }
}
