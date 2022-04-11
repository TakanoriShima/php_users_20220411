<?php
    //コントローラー(C)
    //外部ファイルの読み込み
    require_once "models/User.php";
    session_start();
  
    //モデルを使ってMYSQLから全データ取得
    $users = User::all();
    //セッションから$flash_messageを取得
    $flash_message = $_SESSION["flash_message"];
    
    //セッション情報の破棄
    
    $_SESSION["flash_message"] = null;
    
    //HTMLファイルを表示
    include_once "views/index.view.php";