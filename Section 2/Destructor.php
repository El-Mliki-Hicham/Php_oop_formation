<?php

class File{

    private $handle ;
    private $filename;

    function __construct($filename )
    {
        $this->filename = $filename;
        $this->handle = fopen($filename,"r");
    }

    function __destruct()
    {
        if ($this->handle) {
			fclose($this->handle);
		}
    }

    function read(){
        return fread($this->handle,filesize($this->filename));
    }
}

$file = new File('./test.txt');


echo $file->read();

?>