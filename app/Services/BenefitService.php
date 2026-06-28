<?php

namespace App\Services;

use App\Repositories\Contracts\BenefitRepositoryInterface;

class BenefitService extends BaseService
{
    /**
     * BenefitService constructor.
     *
     * @param BenefitRepositoryInterface $repository
     */
    public function __construct(BenefitRepositoryInterface $repository)
    {
        parent::__construct($repository);
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
            $this->repository->update($id, ['order_number' => $orderNumber]);
        }
    }
}
