<?php
require_once "views/checkFile.php";

class Uploader
{
    private $filename; //filename
    private $fileData; //tmpname
    private $destination;
    private $keyValue;

    //declare a constructor method
    public function __construct($key)
    {
        $this->keyValue = $key;
        $this->filename = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
    }

    public function saveIn($folder)
    {
        $this->destination = $folder;
    }
    public function save()
    {
        $variableName = $this->keyValue;
        $tmp = $_FILES[$this->keyValue]['tmp_name'];

        $folderIsWriteAble = is_writable($this->destination);

        $notValid = checkFile($tmp, $variableName);


        if (!$notValid and $folderIsWriteAble) {
            $name = "$this->destination/$this->filename";
            $success = move_uploaded_file($this->fileData, $name);
        } else {
            $success = false;
        }
        return $success;
    }
}
