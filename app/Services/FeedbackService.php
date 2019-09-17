<?php

namespace App\Services;

use App\Models\Feedback;
use Carbon\Carbon;

class FeedbackService
{
    public static function getAllCountedInfoAsArray()
    {
        $allFeedbackMessages = Feedback::count();

        $viewedFeedbackMessages = Feedback::where('viewed', Feedback::STATUS_VIEWED)->count();

        $notViewedFeedbackMessages = $allFeedbackMessages - $viewedFeedbackMessages;

        return [
            'allFeedbackMessages' => $allFeedbackMessages,
            'viewedFeedbackMessages' => $viewedFeedbackMessages,
            'notViewedFeedbackMessages' => $notViewedFeedbackMessages
        ];
    }

    public static function countTodayMessages()
    {
        return Feedback::where('created_at', '>=', Carbon::now()->startOfDay())->count();
    }
}
