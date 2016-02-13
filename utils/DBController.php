<?php

class DBController {

    const TABLE_USERS = "users";
    const DATA_BASE = "api_server";

    const FIELD_USERS_ID = "id";
    const FIELD_USERS_LOGIN = "login";

    private static $sConnection;

    private $servername = "localhost";
    private $username = "root";
    private $password = "";

    public function DBController() {
        DBController::$sConnection = new mysqli($this->servername, $this->username, $this->password, DBController::DATA_BASE);
    }

    public static function getConnection() {
        return DBController::$sConnection;
    }

    public static function getUsersQuery() {
        return "Select * from ".DBController::TABLE_USERS.";";
    }

    public static function closeConnection() {
        DBController::$sConnection->close();
    }
}