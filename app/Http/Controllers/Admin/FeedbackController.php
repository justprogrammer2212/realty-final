<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbackMessagesInfo = FeedbackService::getAllCountedInfoAsArray();

        $feedbackMessages = Feedback::orderByDesc('created_at')->paginate(25);

        return view('admins.pages.feedback.index', compact('feedbackMessages', 'feedbackMessagesInfo'));
    }

    public function show(Feedback $feedback)
    {
        if ($feedback->isNotViewed()) {
            $feedback->changeViewedStatus(Feedback::STATUS_VIEWED);
        }
        return view('admins.pages.feedback.show', compact('feedback'));
    }

    public function update(Feedback $feedback)
    {
        $status = $feedback->isViewed() ? Feedback::STATUS_NOT_VIEWED : Feedback::STATUS_VIEWED;

        $feedback->changeViewedStatus($status);

        return redirect()->route('admin.feedback.index');
    }
}
