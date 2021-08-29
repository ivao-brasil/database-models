<?php

namespace IvaoBrasil\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\DivisionAward;
use IvaoBrasil\Models\Core\User;

class EventRequestAward extends Model
{
    use HasFactory;

    protected $table = 'events_request_award';

    public function member() {
        return $this->hasOne(User::class, 'vid', 'member_vid');
    }

    public function award() {
        return $this->hasOne(DivisionAward::class, 'id', 'award_id');
    }
}
