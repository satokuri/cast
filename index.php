<?php

include(dirname(__FILE__) . '/app/pages/index.php');

$db = DataBase::getInstance();

   //USAGE
    /*
        Connecting to DataBase
        $database = new db("root", "", "localhost", "database", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        Getting row
        $getrow = $database->getRow("SELECT email, username FROM users WHERE username =?", array("yusaf"));

        Getting multiple rows
        $getrows = $database->getRows("SELECT id, username FROM users");

        inserting a row
        $insertrow = $database ->insertRow("INSERT INTO users (username, email) VALUES (?, ?)", array("yusaf", "yusaf@email.com"));

        updating existing row
        $updaterow = $database->updateRow("UPDATE users SET username = ?, email = ? WHERE id = ?", array("yusafk", "yusafk@email.com", "1"));

        delete a row
        $deleterow = $database->deleteRow("DELETE FROM users WHERE id = ?", array("1"));
        disconnecting from database
        $database->Disconnect();

        checking if database is connected
        if($database->isConnected){
        echo "you are connected to the database";
        }else{
        echo "you are not connected to the database";
        }

    */
