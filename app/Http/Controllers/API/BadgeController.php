<?php

namespace App\Http\Controllers\API;

use App\Models\Badge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBadgeRequest;
use App\Http\Requests\UpdateBadgeRequest;
use App\Http\Resources\BadgeResource;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $badges = Badge::query()->paginate(10);

        $badgeResource = BadgeResource::collection($badges);
        $badges->data = $badgeResource;

        return $this->successResponse("Badges retrieved successfully", $badges);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBadgeRequest $request)
    {
        $badge = Badge::create($request->validated());

        return $this->createdResponse("New badge created successfully", new BadgeResource($badge));
    }

    /**
     * Display the specified resource.
     */
    public function show(Badge $badge)
    {
        return $this->successResponse("Badge retrieved successfully", new BadgeResource($badge));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBadgeRequest $request, Badge $badge)
    {
        $badge->update($request->validated());

        return $this->successResponse("Badge updated successfully", new BadgeResource($badge));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Badge $badge)
    {
        $badge->delete();

        return $this->successResponse("Badge deleted successfully");
    }
}
