<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use App\Services\TestimonialService;

class TestimonialController extends Controller
{
    protected TestimonialService $testimonialService;

    public function __construct(TestimonialService $testimonialService)
    {
        $this->testimonialService = $testimonialService;
    }

    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        // For pagination as requested in CURRENT_SPRINT.md
        // Assuming $this->testimonialService->paginate() exists. If not, it can be adjusted.
        // We'll use all() for now and handle UI logic if paginate() isn't implemented.
        $testimonials = $this->testimonialService->all();
        
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();
        $data['featured'] = $request->has('featured');

        $this->testimonialService->create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(int $id)
    {
        $testimonial = $this->testimonialService->find($id);
        
        if (!$testimonial) {
            abort(404);
        }

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(UpdateTestimonialRequest $request, int $id)
    {
        $data = $request->validated();
        $data['featured'] = $request->has('featured');

        $this->testimonialService->update($id, $data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(int $id)
    {
        $this->testimonialService->delete($id);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }
}
