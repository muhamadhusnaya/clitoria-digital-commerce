<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateBusinessSettingRequest;
use App\Http\Requests\Admin\UpdateSeoSettingRequest;
use App\Services\SettingService;
use Illuminate\Http\Request;
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
     * Display the settings form.
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * Update the business settings.
     */
    public function update(UpdateBusinessSettingRequest $request)
    {
        $validated = $request->validated();
        
        $this->settingService->updateMany($validated);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Business settings updated successfully.');
    }


    /**
     * Update the SEO settings.
     */
    public function updateSeo(UpdateSeoSettingRequest $request)
    {
        $validated = $request->validated();
        
        $this->settingService->updateMany($validated);

        return redirect()->back()
            ->with('success', 'SEO settings updated successfully.');
    }
}
