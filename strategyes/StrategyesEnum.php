<?php

class StrategyesEnum {

    public function getStrategyes($name) {
        if (TestStrategy::NAME == $name) {
            return new TestStrategy();
        }
        return new Strategy();
    }
}