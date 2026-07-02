<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Services\GalleryService;

class GalleryController extends Controller
{
    protected GalleryService $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    /**
     * Display a listing of the galleries.
     */
    public function index()
    {
        // Get all galleries. The UI mockup uses $galleries.
        $galleries = $this->galleryService->all();
        
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new gallery image.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created gallery image in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $this->galleryService->create($request->validated());

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery image uploaded successfully.');
    }

    /**
     * Show the form for editing the specified gallery image.
     */
    public function edit(int $id)
    {
        $gallery = $this->galleryService->find($id);
        
        if (!$gallery) {
            abort(404);
        }

        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified gallery image in storage.
     */
    public function update(UpdateGalleryRequest $request, int $id)
    {
        $this->galleryService->update($id, $request->validated());

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery metadata updated successfully.');
    }

    /**
     * Remove the specified gallery image from storage.
     */
    public function destroy(int $id)
    {
        $this->galleryService->delete($id);

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery image deleted successfully.');
    }
}
