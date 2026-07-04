<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    /**
     * Upload a file and return its path.
     *
     * @param UploadedFile $file
     * @param string $path
     * @param string $disk
     * @return string
     */
    public function uploadFile(UploadedFile $file, string $path = 'uploads', string $disk = 'public'): string
    {
        return $file->store($path, $disk);
    }

    /**
     * Delete a file from storage.
     *
     * @param string|null $filePath
     * @param string $disk
     * @return bool
     */
    public function deleteFile(?string $filePath, string $disk = 'public'): bool
    {
        if ($filePath && Storage::disk($disk)->exists($filePath)) {
            return Storage::disk($disk)->delete($filePath);
        }

        return false;
    }
}
