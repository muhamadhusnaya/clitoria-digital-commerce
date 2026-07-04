<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePartnerRequest;
use App\Http\Requests\Admin\UpdatePartnerRequest;
use App\Services\PartnerService;

class PartnerController extends Controller
{
    protected PartnerService $partnerService;

    public function __construct(PartnerService $partnerService)
    {
        $this->partnerService = $partnerService;
    }

    /**
     * Display a listing of the partners.
     */
    public function index()
    {
        $partners = $this->partnerService->getAllPartners();
        
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new partner.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created partner in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        $this->partnerService->createPartner($request->validated());

        return redirect()->route('admin.partners.index')
            ->with('success', 'Partner added successfully.');
    }

    /**
     * Show the form for editing the specified partner.
     */
    public function edit(int $id)
    {
        $partner = $this->partnerService->getPartnerById($id);
        
        if (!$partner) {
            abort(404);
        }

        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified partner in storage.
     */
    public function update(UpdatePartnerRequest $request, int $id)
    {
        $this->partnerService->updatePartner($id, $request->validated());

        return redirect()->route('admin.partners.index')
            ->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified partner from storage.
     */
    public function destroy(int $id)
    {
        $this->partnerService->deletePartner($id);

        return redirect()->route('admin.partners.index')
            ->with('success', 'Partner deleted successfully.');
    }
}
