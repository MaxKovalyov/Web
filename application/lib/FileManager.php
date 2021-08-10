<?php

namespace application\lib;

class FileManager {

    private $nameFile;

    private $mode;
    
    private $file;

    public function __construct($nameFile, $mode) {
        $this->nameFile = $nameFile;
        $this->mode = $mode;
        $this->file = @fopen($nameFile, $mode);
    }

    public function write($data) {
        if($this->mode != 'r') {
            fwrite($this->file, $data);
        }
    }

    public function read():array {
        if($this->mode != 'w' || $this->mode != 'a' || $this->mode != 'x') {
            return file($this->nameFile);
        } 
        else {
            return [];
        }
    }

    public function close() {
        fclose($this->file);
    }


    

}