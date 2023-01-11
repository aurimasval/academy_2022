<?php

class DivideByZeroException extends Exception {
    public function __construct() {
        parent::__construct("Negalima dalinti iš 0");
    }
}