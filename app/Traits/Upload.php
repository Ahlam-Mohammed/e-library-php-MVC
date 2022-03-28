<?php

namespace App\Traits;

trait Upload
{
    public $img_dir   = __DIR__."/../../public/uploads/";
    public $file_err = '';
    public $uploadOk = 1;
    public $new_file_name;

    private $path;
    private $temp_name;
    private $img_size;
    private $img_file_type;

    public function storeImage($file)
    {
        $this->path      = $file['name']; // 6637.png
        $this->temp_name = $file['tmp_name']; // C:\xampp\tmp\php74EE.tmp
        $this->img_size  = $file['size'];

        $this->checkEmpty() === true ? $this->uploadOk = 0 : $this->generateNewFileName();

        $this->validate();

        $this->uploadOk === 0 ?
            $this->file_err = "Sorry, your file was not uploaded." :
            move_uploaded_file($this->temp_name, $this->img_dir.$this->new_file_name);
    }

    public function updateImage($oldFile, $newFile)
    {
        if (!empty($newFile['name'])) {
            if (file_exists($this->img_dir . $oldFile)) {
                unlink($this->img_dir . $oldFile);
            }
            $this->storeImage($newFile);
        }
        else {
            $this->new_file_name = $oldFile;
        }
    }

    public function generateNewFileName()
    {
        $target_file   = $this->img_dir.basename($this->path); // public/uploads/6637.png

        $this->img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // png

        $this->new_file_name = time().".".$this->img_file_type;
    }

    public function validate()
    {
        // Check if image file is a actual image or fake image
        $check = getimagesize($this->temp_name);
        if ($check !== false) {
            $this->uploadOk = 1;
        }
        else {
            $this->file_err = "File is not an image.";
            $this->uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($this->new_file_name))
        {
            $this->file_err = "Sorry, file already exists.";
            $this->uploadOk = 0;
        }

        // Check file size
        if ($this->img_size > 500000)
        {
            $this->file_err = "Sorry, your file is too large.";
            $this->uploadOk = 0;
        }

        // Allow certain file formats
        if ($this->img_file_type != "jpg" &&
            $this->img_file_type != "png" &&
            $this->img_file_type != "jpeg" &&
            $this->img_file_type != "gif")
        {
            $this->file_err = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $this->uploadOk = 0;
        }
    }

    public function checkEmpty(): bool
    {
        if (empty($this->path))
        {
            $this->file_err = "file not found ...";
            return true;
        }
        return false;
    }
}