<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    /**
     * Upload a file and return its path.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $folder
     * @param string $disk
     * @return string
     */
    public function uploadFile($file, $folder, $disk = 'public')
    {
        return $file->store($folder, $disk);
    }

    /**
     * Delete a file if it exists.
     *
     * @param string|null $path
     * @param string $disk
     * @return void
     */
    public function deleteFile($path, $disk = 'public')
    {
        if ($path && Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        }
    }
}
