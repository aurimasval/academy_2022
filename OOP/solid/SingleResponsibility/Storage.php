<?php

class Storage {
    public function store($content) {
        file_put_contents("file.txt", $content);
    }
}