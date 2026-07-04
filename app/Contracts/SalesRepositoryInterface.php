<?php

namespace App\Contracts;

interface SalesRepositoryInterface
{
    public function all();

    public function paginate(int $perPage = 10);

    public function find(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function getByDateRange(?string $startDate = null, ?string $endDate = null);

    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null);

    public function getSalesCount(?string $startDate = null, ?string $endDate = null);

    public function getAverageOrderValue(?string $startDate = null, ?string $endDate = null);

    public function getTotalItemsSold(?string $startDate = null, ?string $endDate = null);

    public function getProductRanking(?string $startDate = null, ?string $endDate = null, int $limit = 10);
}