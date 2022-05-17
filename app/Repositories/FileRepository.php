<?php

namespace App\Repositories;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileRepository
{
    // Disk to be used for storage
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


    public function put($path, $contents, $name = null, $visibility = 'public-read')
    {
        if (
            $contents instanceof File ||
            $contents instanceof UploadedFile
        ) {
            return is_null($name)
                ? Storage::disk($this->disk)->putFile($path, $contents, $visibility)
                : Storage::disk($this->disk)->putFileAs($path, $contents, $name, $visibility);
        }

        // Write raw contents to file
        Storage::disk($this->disk)->put($path, $contents, $visibility);

        return $path;
    }

    /*
     * Get the url of the storage file
     */
    public function get($path)
    {
        // dd($this->disk);
        return $this->disk === "s3"
            ? Storage::disk($this->disk)->url($path)
            : Storage::disk($this->disk)->get($path);
    }

    /*
     * Download the file
     */
    public function download($path, $fileName = null)
    {
        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'credentials' => [
                'key' => config("filesystems.disks.s3.key"),
                'secret' => config("filesystems.disks.s3.secret")
            ]
        ]);

        try {
            // Get the object.
            $result = $s3->getObject([
                'Bucket' => config("filesystems.disks.s3.bucket"),
                'Key'    => $path
            ]);

            // Display the object in the browser.
            header("Content-Type: {$result['ContentType']}");
            header("Content-Disposition: attachment; filename=" . $fileName ?? basename($path));
            echo $result['Body'];
        } catch (S3Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    /*
     * Get the extension of the file
     */
    public function getExtension($path)
    {
        $pathInfo = pathinfo($path);

        return array_key_exists("extension", $pathInfo) ? $pathInfo["extension"] : null;
    }

    /*
     * Get the name of the file
     */
    public function getName($path)
    {
        $pathInfo = pathinfo($path);

        return $pathInfo["basename"];
    }

    /*
     * Delete the file from the storage
     */
    public function delete($path)
    {
        return Storage::disk($this->disk)->delete($path);
    }

    /*
     * Rename File
     */
    // public function renameFile($id, $name)
    // {
    //     return $this->updateField($id, "name", $name);
    // }

    /*
     * Update project_files table field in DB
     */
    // public function updateField($id, $field, $value)
    // {
    //     ProjectFile::where("id", $id)->update([
    //         $field => $value
    //     ]);

    //     return array("id" => $id, "name" => $value);
    // }


    public function getSize($path)
    {
        return Storage::disk($this->disk)->size($path);
    }

    public function rename($oldPath, $newPath)
    {
        if ($this->exists($oldPath))
            Storage::disk($this->disk)->move($oldPath, $newPath);
    }

    public function copy($oldPath, $newPath)
    {
        if ($this->exists($oldPath) && !$this->exists($newPath))
            return Storage::disk($this->disk)->copy($oldPath, $newPath);
    }

    public function exists($path)
    {
        return Storage::disk($this->disk)->exists($path);
    }
}
