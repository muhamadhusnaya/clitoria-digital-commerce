<?php

namespace App\Services;

use App\Repositories\Contracts\TeamRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class TeamService extends BaseService
{
    use \App\Traits\UploadTrait;

    protected string $uploadPath = 'teams';

    /**
     * @var TeamRepositoryInterface
     */
    protected TeamRepositoryInterface $teamRepository;

    /**
     * TeamService constructor.
     *
     * @param TeamRepositoryInterface $teamRepository
     */
    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * Get all teams.
     */
    public function getAllTeams()
    {
        return $this->teamRepository->all();
    }

    /**
     * Get paginated teams.
     */
    public function getPaginatedTeams($perPage = 10)
    {
        return $this->teamRepository->paginate($perPage);
    }

    /**
     * Create a new team.
     */
    public function createTeam(array $data)
    {
        if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
            $data['photo'] = $this->uploadFile($data['photo'], $this->uploadPath);
        }

        return $this->teamRepository->create($data);
    }

    /**
     * Find a team by ID.
     */
    public function getTeamById($id)
    {
        return $this->teamRepository->find($id);
    }

    /**
     * Update an existing team.
     */
    public function updateTeam($id, array $data)
    {
        $team = $this->teamRepository->find($id);

        if (!$team) {
            return false;
        }

        if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
            if ($team->photo) {
                $this->deleteFile($team->photo);
            }
            $data['photo'] = $this->uploadFile($data['photo'], $this->uploadPath);
        }

        return $this->teamRepository->update($id, $data);
    }

    /**
     * Delete a team.
     */
    public function deleteTeam($id)
    {
        $team = $this->teamRepository->find($id);
        
        if ($team && $team->photo) {
            $this->deleteFile($team->photo);
        }

        return $this->teamRepository->delete($id);
    }
}
