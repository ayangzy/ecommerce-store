<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Actions\AchievementAction;
use App\Http\Controllers\Controller;

class AchievementController extends Controller
{
    public function index(User $user)
    {
        $achievements = (new AchievementAction())->execute($user);

        return $this->successResponse("Achievements retreived successfully", $achievements);
    }
}
