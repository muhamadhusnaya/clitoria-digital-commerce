<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeroRequest;
use App\Http\Requests\Admin\UpdateHeroRequest;
use App\Models\Hero;
use App\Services\HeroService;

class HeroController extends Controller
{
    protected HeroService $heroService;

    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
    }

    /**
     * Display the hero settings page (singleton).
     */
    public function index()
    {
        // Get the first hero, or create an empty instance if none exists
        $hero = $this->heroService->getAllHeroes()->first() ?? new Hero();
        
        return view('admin.heroes.edit', compact('hero'));
    }

    /**
     * Store a newly created hero in storage.
     */
    public function store(StoreHeroRequest $request)
    {
        $this->heroService->createHero($request->validated());

        return redirect()->route('admin.heroes.index')
            ->with('success', 'Hero created successfully.');
    }

    /**
     * Update the specified hero in storage.
     */
    public function update(UpdateHeroRequest $request, int $id)
    {
        $this->heroService->updateHero($id, $request->validated());

        return redirect()->route('admin.heroes.index')
            ->with('success', 'Hero updated successfully.');
    }
}
