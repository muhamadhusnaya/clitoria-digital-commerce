<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeamRequest;
use App\Http\Requests\Admin\UpdateTeamRequest;
use App\Services\TeamService;

class TeamController extends Controller
{
    protected TeamService $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }

    /**
     * Display a listing of the team members.
     */
    public function index()
    {
        $teams = $this->teamService->getAllTeams();
        
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new team member.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created team member in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $this->teamService->createTeam($request->validated());

        return redirect()->route('admin.teams.index')
            ->with('success', 'Team member added successfully.');
    }

    /**
     * Show the form for editing the specified team member.
     */
    public function edit(int $id)
    {
        $team = $this->teamService->getTeamById($id);
        
        if (!$team) {
            abort(404);
        }

        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(UpdateTeamRequest $request, int $id)
    {
        $this->teamService->updateTeam($id, $request->validated());

        return redirect()->route('admin.teams.index')
            ->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified team member from storage.
     */
    public function destroy(int $id)
    {
        $this->teamService->deleteTeam($id);

        return redirect()->route('admin.teams.index')
            ->with('success', 'Team member deleted successfully.');
    }
}
