<?php

namespace App\Http\Controllers\API;

use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AchievementResource;
use App\Http\Requests\CreateAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;

class AchievementApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::query()->paginate(10);

        $badgeResource = AchievementResource::collection($achievements);
        $achievements->data = $badgeResource;

        return $this->successResponse("Achievements retrieved successfully", $achievements);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAchievementRequest $request)
    {
        $achievement = Achievement::create($request->validated());

        return $this->createdResponse("Achievement created successfully", new AchievementResource($achievement));
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        return $this->successResponse("Achievement retrieved successfully", new AchievementResource($achievement));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $achievement->update($request->validated());

        return $this->successResponse("Achievement updated successfully", new AchievementResource($achievement));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return $this->successResponse("Achievement deleted successfully");
    }
}
