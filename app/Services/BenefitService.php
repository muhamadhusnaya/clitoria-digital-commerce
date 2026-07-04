<?php

namespace App\Services;

use App\Repositories\Contracts\BenefitRepositoryInterface;

class BenefitService extends BaseService
{
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
        return $this->benefitRepository->create($data);
    }

    /**
     * Update an existing benefit.
     */
    public function updateBenefit(int $id, array $data)
    {
        return $this->benefitRepository->update($id, $data);
    }

    /**
     * Delete a benefit.
     */
    public function deleteBenefit(int $id)
    {
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
