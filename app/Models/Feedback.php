<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    const STATUS_NOT_VIEWED = 0;
    const STATUS_VIEWED = 1;

    private $viewedStatuses = [
        self::STATUS_NOT_VIEWED => 'Unread',
        self::STATUS_VIEWED => 'Read',
    ];

    protected $fillable = ['user_name', 'user_email', 'text', 'viewed'];

    public function getViewedStatus()
    {
        return $this->viewedStatuses[$this->viewed];
    }

    public function isViewed()
    {
        return $this->viewed == self::STATUS_VIEWED;
    }

    public function isNotViewed()
    {
        return $this->viewed == self::STATUS_NOT_VIEWED;
    }

    public function changeViewedStatus($status)
    {
        return $this->update([
            'viewed' => $status
        ]);
    }
}
