<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBenefitRequest;
use App\Http\Requests\Admin\UpdateBenefitRequest;
use App\Services\BenefitService;

class BenefitController extends Controller
{
    protected BenefitService $benefitService;

    public function __construct(BenefitService $benefitService)
    {
        $this->benefitService = $benefitService;
    }

    /**
     * Display a listing of the benefits.
     */
    public function index()
    {
        // Getting all benefits from service, ordered by order_number if the service repository method supports it
        // Or we just get all for now
        $benefits = $this->benefitService->all();
        
        // Let's sort them by order_number ascending if available
        if ($benefits instanceof \Illuminate\Support\Collection) {
            $benefits = $benefits->sortBy('order_number');
        }

        return view('admin.benefits.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new benefit.
     */
    public function create()
    {
        return view('admin.benefits.create');
    }

    /**
     * Store a newly created benefit in storage.
     */
    public function store(StoreBenefitRequest $request)
    {
        $this->benefitService->create($request->validated());

        return redirect()->route('admin.benefits.index')
            ->with('success', 'Benefit created successfully.');
    }

    /**
     * Show the form for editing the specified benefit.
     */
    public function edit(int $id)
    {
        $benefit = $this->benefitService->find($id);
        
        if (!$benefit) {
            abort(404);
        }

        return view('admin.benefits.edit', compact('benefit'));
    }

    /**
     * Update the specified benefit in storage.
     */
    public function update(UpdateBenefitRequest $request, int $id)
    {
        $this->benefitService->update($id, $request->validated());

        return redirect()->route('admin.benefits.index')
            ->with('success', 'Benefit updated successfully.');
    }

    /**
     * Remove the specified benefit from storage.
     */
    public function destroy(int $id)
    {
        $this->benefitService->delete($id);

        return redirect()->route('admin.benefits.index')
            ->with('success', 'Benefit deleted successfully.');
    }
}
