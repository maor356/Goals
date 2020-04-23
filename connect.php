<?php


class connect
{

    public function __construct($connect) {

    }

    private function connectToMySql() {
        $mysqli = new mysqli('localhost', 'root', 'root', 'goals', 3308);
    }

}