<?php

namespace App\Services;

use App\Repositories\Contracts\PartnerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PartnerService extends BaseService
{
    use \App\Traits\UploadTrait;

    protected string $uploadPath = 'partners';

    /**
     * @var PartnerRepositoryInterface
     */
    protected PartnerRepositoryInterface $partnerRepository;

    /**
     * PartnerService constructor.
     *
     * @param PartnerRepositoryInterface $partnerRepository
     */
    public function __construct(PartnerRepositoryInterface $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * Get all partners.
     */
    public function getAllPartners()
    {
        return $this->partnerRepository->all();
    }

    /**
     * Find a partner by ID.
     */
    public function getPartnerById(int $id)
    {
        return $this->partnerRepository->find($id);
    }

    /**
     * Create a new partner.
     */
    public function createPartner(array $data)
    {
        if (isset($data['logo']) && $data['logo'] instanceof \Illuminate\Http\UploadedFile) {
            $data['logo'] = $this->uploadFile($data['logo'], $this->uploadPath);
        }

        return $this->partnerRepository->create($data);
    }

    /**
     * Update an existing partner.
     */
    public function updatePartner(int $id, array $data)
    {
        $partner = $this->partnerRepository->find($id);

        if (!$partner) {
            return false;
        }

        if (isset($data['logo']) && $data['logo'] instanceof \Illuminate\Http\UploadedFile) {
            if ($partner->logo) {
                $this->deleteFile($partner->logo);
            }
            $data['logo'] = $this->uploadFile($data['logo'], $this->uploadPath);
        }

        return $this->partnerRepository->update($id, $data);
    }

    /**
     * Delete a partner.
     */
    public function deletePartner(int $id)
    {
        $partner = $this->partnerRepository->find($id);

        if ($partner && $partner->logo) {
            $this->deleteFile($partner->logo);
        }

        return $this->partnerRepository->delete($id);
    }
}
