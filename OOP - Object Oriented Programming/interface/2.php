<?php

interface Writer {
    public function write($content);
}

interface Reader {
    public function read();
}



class FileManager implements Writer, Reader {
    private $content;

    public function write($content) {
        $this->content = $content;
        echo "Content written: $content\n";
    }

    public function read() {
        echo "Content read: $this->content\n";
    }
}

$file = new FileManager();
$file->write("Hello, Interface!");
$file->read();

?>
