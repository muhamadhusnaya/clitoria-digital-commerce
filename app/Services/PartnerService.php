<?php

namespace App\Services;

use App\Repositories\Contracts\PartnerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PartnerService extends BaseService
{
    /**
     * @var PartnerRepositoryInterface
     */
    protected PartnerRepositoryInterface $repository;

    /**
     * PartnerService constructor.
     *
     * @param PartnerRepositoryInterface $repository
     */
    public function __construct(PartnerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all partners.
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repository->all();
    }

    /**
     * Find a partner by ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model
    {
        return $this->repository->find($id);
    }

    /**
     * Create a new partner.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    /**
     * Update an existing partner.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        return $this->repository->update($id, $data);
    }

    /**
     * Delete a partner.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}
