<?php

namespace App\Services;

use App\Repositories\Contracts\TestimonialRepositoryInterface;
use App\Traits\UploadTrait;

class TestimonialService extends BaseService
{
    use UploadTrait;

    protected string $uploadPath = 'testimonials';

    /**
     * @var TestimonialRepositoryInterface
     */
    protected TestimonialRepositoryInterface $testimonialRepository;

    /**
     * TestimonialService constructor.
     *
     * @param TestimonialRepositoryInterface $testimonialRepository
     */
    public function __construct(TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Get all testimonials.
     */
    public function getAllTestimonials()
    {
        return $this->testimonialRepository->all();
    }

    /**
     * Get featured testimonials.
     */
    public function getFeaturedTestimonials()
    {
        return $this->testimonialRepository->getFeatured();
    }

    /**
     * Find a testimonial by ID.
     */
    public function getTestimonialById(int $id)
    {
        return $this->testimonialRepository->find($id);
    }

    /**
     * Create a new testimonial.
     */
    public function createTestimonial(array $data)
    {
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        // Set default is_featured to false if not provided
        $data['is_featured'] = $data['is_featured'] ?? false;

        return $this->testimonialRepository->create($data);
    }

    /**
     * Update an existing testimonial.
     */
    public function updateTestimonial(int $id, array $data)
    {
        $testimonial = $this->testimonialRepository->find($id);

        if (!$testimonial) {
            return false;
        }

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($testimonial->image) {
                $this->deleteFile($testimonial->image);
            }
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        $data['is_featured'] = $data['is_featured'] ?? false;

        return $this->testimonialRepository->update($id, $data);
    }

    /**
     * Delete a testimonial.
     */
    public function deleteTestimonial(int $id)
    {
        $testimonial = $this->testimonialRepository->find($id);

        if ($testimonial && $testimonial->image) {
            $this->deleteFile($testimonial->image);
        }

        return $this->testimonialRepository->delete($id);
    }
}
