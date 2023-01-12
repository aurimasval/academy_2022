<?php

interface LoggerInterface {
    public function log(string $text);
}

class ConsoleLogger implements LoggerInterface {
    public function log(string $text) {
        echo $text;
    }
}

class FileLogger implements LoggerInterface {
    public function log(string $text) {
        file_put_contents('log.log', $text);
    }
}

class Calculator {
    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function calculate()
    {
        ///some calculation
        $this->logger->log(6);
    }
}

$logger = new ConsoleLogger();
$fileLogger = new FileLogger();
$calculator = new Calculator($fileLogger);
$calculator->calculate();