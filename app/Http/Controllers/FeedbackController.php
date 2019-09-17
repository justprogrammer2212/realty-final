<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(CreateFeedbackRequest $request)
    {
        $data = $request->validated();

        Feedback::create($data);

        return back();
    }
}
