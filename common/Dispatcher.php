<?php

class Dispatcher
{

  public function dispatch()
  {
    
    // URLを分解してparamsを取得
    $url = $_SERVER['REQUEST_URI'];
    $urlTrimmed = trim($url, '/');
    $params = array();
    if ('' != $urlTrimmed) {
      $params = explode('/', $urlTrimmed);
    }

    // コントローラーインスタンス生成
    $controllerName = 'pages';
    if (0 < count($params)) {
      $controllerName = $params[1];
    }
    $controller = $this->getController($controllerName);
    if (null == $controller) {
      header("HTTP/1.0 404 Not Found");
      exit;
    }
    
    // アクション設定
    $actionName = 'index';
    if (1 < count($params)) {
      $actionName = $params[2];
    }
    if (false == method_exists($controller, $actionName . 'Action')) {
      header('HTTP/1.0 404 Not Found');
      exit;
    }
    $controller->setAction($actionName);

    // コントローラーの実行 
    //$controller->run();
    $controller->indexAction();
  }

  /*
   *  コントローラーを取得
   */
  private function getController($controllerName)
  {
    // 1文字目を大文字に変換しControllerを付ける
    $className = ucfirst(strtolower($controllerName)) . 'Controller';
    // コントローラーのファイル名
    $fileName = sprintf('controllers/%s.php', $className);
    // ファイル存在チェック
    if (false == file_exists($fileName)) {
      return null;
    }
    // クラスファイルを読込
    require_once $fileName;
    // クラスが定義されているかチェック
    if (false == class_exists($className)) {
      return null;
    }
    // クラスインスタンス生成
    $instance = new $className;

    return $instance;
  }
}

?>
