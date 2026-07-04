<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeroRequest;
use App\Http\Requests\Admin\UpdateHeroRequest;
use App\Services\HeroService;

class HeroController extends Controller
{
    protected HeroService $heroService;

    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
    }

    /**
     * Display a listing of the heroes.
     */
    public function index()
    {
        $heroes = $this->heroService->getAllHeroes();
        return view('admin.heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new hero.
     */
    public function create()
    {
        return view('admin.heroes.create');
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
     * Show the form for editing the specified hero.
     */
    public function edit(int $id)
    {
        $hero = $this->heroService->getHeroById($id);
        
        if (!$hero) {
            abort(404);
        }

        return view('admin.heroes.edit', compact('hero'));
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

    /**
     * Remove the specified hero from storage.
     */
    public function destroy(int $id)
    {
        $this->heroService->deleteHero($id);

        return redirect()->route('admin.heroes.index')
            ->with('success', 'Hero deleted successfully.');
    }
}
