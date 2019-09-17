<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FeedbackService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $todayUsers = User::where('created_at', '>=', Carbon::now()->startOfDay())->count();

        $feedbackMessagesInfo = FeedbackService::getAllCountedInfoAsArray();
        $todayFeedback = FeedbackService::countTodayMessages();

        return view('admins.index', [
            'totalUsers' => $totalUsers,
            'todayUsers' => $todayUsers,
            'feedbackMessagesInfo' => $feedbackMessagesInfo,
            'todayFeedback' => $todayFeedback,
        ]);
    }
}
