<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

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
        $mime = $file->getMimeType();
        
        // Optimize images (except SVGs)
        if (str_starts_with($mime, 'image/') && $mime !== 'image/svg+xml') {
            try {
                $manager = new ImageManager(new Driver());
                $image = $manager->decodePath($file->getRealPath());

                // Scale down if wider than 1200px
                $image->scaleDown(width: 1200);

                // Convert to WebP with 80% quality
                $encoded = $image->encodeUsingFileExtension('webp', 80)->toString();
                
                $filename = Str::random(40) . '.webp';
                $fullPath = trim($path, '/') . '/' . $filename;
                
                Storage::disk($disk)->put($fullPath, $encoded);
                
                return $fullPath;
            } catch (\Exception $e) {
                // Fallback to default if optimization fails
                return $file->store($path, $disk);
            }
        }

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
