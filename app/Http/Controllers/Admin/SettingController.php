<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSeoSettingRequest;
use App\Services\SettingService;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * @var SettingService
     */
    protected SettingService $settingService;

    /**
     * SettingController constructor.
     *
     * @param SettingService $settingService
     */
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    /**
     * Display the SEO settings form.
     */
    public function seo()
    {
        return view('admin.settings.seo');
    }

    /**
     * Update the SEO settings.
     */
    public function updateSeo(UpdateSeoSettingRequest $request)
    {
        $validated = $request->validated();
        
        // Handle file upload for seo_og_image
        if ($request->hasFile('seo_og_image')) {
            // Delete old image if it exists
            $oldImage = get_setting('seo_og_image');
            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }

            // Store new image
            $path = $request->file('seo_og_image')->store('settings', 'public');
            $validated['seo_og_image'] = $path;
        }

        $this->settingService->updateMany($validated);

        return redirect()->route('admin.settings.seo')
            ->with('success', 'SEO settings updated successfully.');
    }
}
