<?php

class StrategySelector {

    const API_TYPE_GET = 'type';
    private $mStrategyesEnum;

    public function StrategySelector() {
        $this->mStrategyesEnum = new StrategyesEnum();
    }

    public function defineStrategy() {
        $type = $_GET[StrategySelector::API_TYPE_GET];
        $strategy = $this->define($type);
        return $strategy;
    }

    private function define($type) {
        $strategy = $this->mStrategyesEnum->getStrategyes($type);
        return $strategy;
    }
}