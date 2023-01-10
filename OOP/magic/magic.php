<?php

class Magic {

    public function __invoke()
    {
     var_dump('invoke stuff');
    }

    public function __toString() {
        return 'Magic';
    }

    public function __clone()
    {
        echo "KLONUOJAM";
    }
}

$magic = new Magic();
$magic();
echo $magic;

var_dump(clone $magic);
