<?php

interface Redable {
    public function read();
}

interface Writable {
    public function write(string $content);
}
class File implements Redable, Writable
{
    public function read()
    {
        // ...
    }

    public function write(string $content)
    {
        // ...
    }
}

class ReadOnlyFile implements Redable
{
    public function read()
    {
        // TODO: Implement read() method.
    }
}

$file = Writable;

$file->write("eeeeee");

