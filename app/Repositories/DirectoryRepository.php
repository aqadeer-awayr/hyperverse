<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class DirectoryRepository
{
    // default disk to be used for storage
    private $disk;

    public function __construct($disk = 's3')
    {
        $this->disk = $disk;
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;

        return $this;
    }


    public function create($paths, $mode = 0755, $recursive = false, $force = false)
    {
        if (is_array($paths)){
            foreach ($paths as $path){
                Storage::disk($this->disk)->makeDirectory($path, $mode, $recursive, $force);
            }
        }
        else{
            Storage::disk($this->disk)->makeDirectory($paths, $mode, $recursive, $force);
        }

        return true;
    }

    public function delete($paths, $preserve = false)
    {
        if (is_array($paths)){
            foreach ($paths as $path){
                Storage::disk($this->disk)->deleteDirectory($path, $preserve);
            }
        }
        else{
            Storage::disk($this->disk)->deleteDirectory($paths, $preserve);
        }

        return true;
    }

    public function getSize($path)
    {
        $fileSize = 0;

        foreach(Storage::disk($this->disk)->allFiles($path) as $filePath){
            $fileSize += Storage::disk($this->disk)->size($filePath);
        }

        return $fileSize;
    }

    // Rename is NOT allowed on folders,
    // we have to make a folder with new name, copy files over it and delete the old folder
    public function rename($oldPath, $newPath)
    {
        $allFiles = Storage::disk($this->disk)->allFiles($oldPath);

        foreach($allFiles as $file)
        {
            if(Storage::disk($this->disk)->exists($file)) {
                $moveTo = str_replace($oldPath, $newPath, $file);
                Storage::disk($this->disk)->move($file, $moveTo);
            }
        }

        // Delete old folder
        $this->delete($oldPath);
    }

    // Get All Files
    public function getAllFiles($directoryPath)
    {
        return Storage::disk($this->disk)->allFiles($directoryPath);
    }
}
