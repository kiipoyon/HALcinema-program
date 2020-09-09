<?php
    //COPYRIGHT="All Rights Reserved. Copyright 2019 (C) HAL.AC.JP"


    /**
     * <pre>
     *  セッションを開始する
     * </pre>
     *
     * @author HAL〇〇
     * @version 1.0.0
     */
    session_start();

    function connect() {
        // 接続するデータベースの設定をする
        return new PDO('mysql:host=localhost;dbname=haldb;charset=utf8','dbadmin','dbadmin');
    }





    /**
     * <pre>
     *  画像を設定する
     * </pre>
     *
     * @author HAL〇〇
     * @version 1.0.0
     */
    function img_tag($code) {
        if (file_exists("images/$code.jpg")) $name = $code;
        else $name = 'noimage';

        return '<img src="images/' . $name . '.jpg" alt="">';
    }
?>