<?php

class TestStrategy extends Strategy{

    const NAME = "test_strategy";

    public function execute($main) {
        return $this->testFunction();
    }

    private function testFunction() {
        $responseArray = $this->getDataFromDb();
        return $this->parseResponse($responseArray);
    }

    private function getDataFromDb() {
        $responseArray = array();
        $connection = DBController::getConnection();
        $query = $connection->query(DBController::getUsersQuery());
        while($user = $query->fetch_assoc()){
            $responseArray[$user[DBController::FIELD_USERS_ID]] = $user[DBController::FIELD_USERS_LOGIN];
        }
        return $responseArray;
    }

    private function parseResponse($array) {
        return json_encode($array);
    }
}