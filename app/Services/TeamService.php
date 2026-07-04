<?php

namespace App\Services;

use App\Repositories\Contracts\TeamRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class TeamService extends BaseService
{
    /**
     * @var TeamRepositoryInterface
     */
    protected $repository;

    /**
     * TeamService constructor.
     *
     * @param TeamRepositoryInterface $repository
     */
    public function __construct(TeamRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all teams.
     */
    public function getAll()
    {
        return $this->repository->all();
    }

    /**
     * Get paginated teams.
     */
    public function getPaginated($perPage = 10)
    {
        return $this->repository->paginate($perPage);
    }

    /**
     * Create a new team.
     *
     * @param array $data
     * @return mixed
     */
    public function store(array $data)
    {
        if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
            $data['photo'] = $data['photo']->store('teams', 'public');
        }

        return $this->repository->create($data);
    }

    /**
     * Find a team by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update an existing team.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $team = $this->repository->find($id);

        if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
            if ($team->photo && Storage::disk('public')->exists($team->photo)) {
                Storage::disk('public')->delete($team->photo);
            }
            $data['photo'] = $data['photo']->store('teams', 'public');
        }

        return $this->repository->update($id, $data);
    }

    /**
     * Delete a team.
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        $team = $this->repository->find($id);
        
        // Due to SoftDeletes, we might want to keep the photo, but if we need to remove it physically:
        // if ($team->photo && Storage::disk('public')->exists($team->photo)) {
        //     Storage::disk('public')->delete($team->photo);
        // }

        return $this->repository->delete($id);
    }
}
