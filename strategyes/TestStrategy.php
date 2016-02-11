<?php

class TestStrategy extends Strategy{

    const NAME = "test_strategy";

    public function execute($main) {
        return $this->testFunction();
    }

    private function testFunction() {
        $responseArray = array("response_saccess" => true, "data" => "hello world!");
        return $this->parseResponse($responseArray);
    }

    private function parseResponse($array) {
        return json_encode($array);
    }
}