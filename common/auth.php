<?php
session_start();
// セッションにアカウント情報がある場合
if(isset($_SESSION['account'])){
  // 認証処理
  $account = authCheck($_SESSION['account']['email'], $_SESSION['account']['password']);
  if(isset($account)){
    // ログインフラグをtrueにする
    $login = true;
    // セッションにユーザー情報を格納
    $_SESSION['account'] = $account;
  } else {
    // ログインフラグをfalseにする
    $login = false;
    // セッションを破棄
    unset($_SESSION['account']);
  }
// セッションにアカウント情報がない場合
} else {
  // ログインフラグをfalseにする
  $login = false;
}
?>