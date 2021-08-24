<?php

namespace IvaoBrasil\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Events\Event;
use IvaoBrasil\Models\Core\User;

class EventReport extends Model
{
    protected $table = 'events_report';
    use HasFactory;

    public function remarks() {
        return $this->hasMany(EventReportRemark::class, 'report_id', 'id');
    }

    public function event() {
        return $this->hasOne(Event::class, 'id', 'event_id');
    }

    public function owner(){
        return $this->hasOne(User::class, 'vid', 'owner_id');
    }
}
