<?php

namespace App\Services;

use App\Repositories\Contracts\BenefitRepositoryInterface;
use App\Traits\UploadTrait;

class BenefitService extends BaseService
{
    use UploadTrait;
    /**
     * @var BenefitRepositoryInterface
     */
    protected BenefitRepositoryInterface $benefitRepository;

    /**
     * BenefitService constructor.
     *
     * @param BenefitRepositoryInterface $benefitRepository
     */
    public function __construct(BenefitRepositoryInterface $benefitRepository)
    {
        $this->benefitRepository = $benefitRepository;
    }

    /**
     * Get all benefits.
     */
    public function getAllBenefits()
    {
        return $this->benefitRepository->all();
    }

    /**
     * Find a benefit by ID.
     */
    public function getBenefitById(int $id)
    {
        return $this->benefitRepository->find($id);
    }

    /**
     * Create a new benefit.
     */
    public function createBenefit(array $data)
    {
        if (isset($data['icon_type']) && $data['icon_type'] === 'image') {
            if (isset($data['icon_file']) && $data['icon_file'] instanceof \Illuminate\Http\UploadedFile) {
                $data['icon'] = $this->uploadFile($data['icon_file'], 'benefits');
            } else {
                $data['icon'] = 'eco'; // default fallback
            }
        } elseif (isset($data['icon_type']) && $data['icon_type'] === 'material' && empty($data['icon'])) {
            $data['icon'] = 'eco'; // fallback
        }
        
        unset($data['icon_type'], $data['icon_file']);

        return $this->benefitRepository->create($data);
    }

    /**
     * Update an existing benefit.
     */
    public function updateBenefit(int $id, array $data)
    {
        $benefit = $this->benefitRepository->find($id);

        if (isset($data['icon_type']) && $data['icon_type'] === 'image') {
            if (isset($data['icon_file']) && $data['icon_file'] instanceof \Illuminate\Http\UploadedFile) {
                if ($benefit && $benefit->icon && (str_contains($benefit->icon, '/') || str_contains($benefit->icon, '.'))) {
                    $this->deleteFile($benefit->icon);
                }
                $data['icon'] = $this->uploadFile($data['icon_file'], 'benefits');
            } else {
                // If no new image is uploaded, we must keep the old one.
                unset($data['icon']);
            }
        } elseif (isset($data['icon_type']) && $data['icon_type'] === 'material') {
            if ($benefit && $benefit->icon && (str_contains($benefit->icon, '/') || str_contains($benefit->icon, '.'))) {
                $this->deleteFile($benefit->icon);
            }
            if (empty($data['icon'])) {
                $data['icon'] = 'eco'; // fallback
            }
        }
        
        unset($data['icon_type'], $data['icon_file']);

        return $this->benefitRepository->update($id, $data);
    }

    /**
     * Delete a benefit.
     */
    public function deleteBenefit(int $id)
    {
        $benefit = $this->benefitRepository->find($id);

        if ($benefit && $benefit->icon && (str_contains($benefit->icon, '/') || str_contains($benefit->icon, '.'))) {
            $this->deleteFile($benefit->icon);
        }

        return $this->benefitRepository->delete($id);
    }

    /**
     * Update the order of benefits.
     *
     * @param array $orderData Array of [id => order_number]
     * @return void
     */
    public function updateOrder(array $orderData): void
    {
        foreach ($orderData as $id => $orderNumber) {
            $this->benefitRepository->update($id, ['order_number' => $orderNumber]);
        }
    }
}
