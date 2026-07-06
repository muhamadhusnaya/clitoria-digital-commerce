<?php

namespace App\Repositories\Contracts;

use App\Contracts\BaseRepositoryInterface;

interface SalesRepositoryInterface extends BaseRepositoryInterface
{
    public function paginate(int $perPage = 10);


    public function getByDateRange(?string $startDate = null, ?string $endDate = null);

    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null);

    public function getSalesCount(?string $startDate = null, ?string $endDate = null);

    public function getAverageOrderValue(?string $startDate = null, ?string $endDate = null);

    public function getTotalItemsSold(?string $startDate = null, ?string $endDate = null);

    public function getProductRanking(?string $startDate = null, ?string $endDate = null, int $limit = 10);
    
    public function getMonthlyRevenue(int $year);
}