<?php

class Main {

    private $mUri;
    private $mStrategySelector;
    private $mStrategy;

    public function Main() {
        new DBController();
        $this->mUri = $_SERVER['REQUEST_URI'];
        $this->mStrategySelector = new StrategySelector();
        $this->mStrategy = $this->selectRequestStrategy();
        $response = $this->mStrategy->execute($this);
        echo $response;
        DBController::closeConnection();
    }

    private function selectRequestStrategy() {
        $strategy = $this->mStrategySelector->defineStrategy();
        return $strategy;
    }
}