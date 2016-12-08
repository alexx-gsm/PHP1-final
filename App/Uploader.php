<?php
namespace App;

class Uploader
{
    protected $fieldFormName = '';
    protected $pathImg =  '/assets/images/';
    protected $pathUpload;

    public function __construct(string $fieldFormName = 'file')
    {
        $this->fieldFormName = $fieldFormName;
        $this->pathUpload = __DIR__ . '/..' . $this->pathImg;
    }

    public function isUploaded():bool
    {
        return (isset($_FILES[$this->fieldFormName]) && 0 == $_FILES[$this->fieldFormName]['error']) ? true : false;
    }

    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->fieldFormName]['tmp_name'], $this->pathUpload . $_FILES[$this->fieldFormName]['name']);
            return $this->pathImg . $_FILES[$this->fieldFormName]['name'];
        }
        return false;
    }
}