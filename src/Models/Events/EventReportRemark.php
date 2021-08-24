<?php

namespace IvaoBrasil\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class EventReportRemark extends Model
{
    protected $table = 'events_reports_remarks';
    protected $fillable = ['report_id', 'remark', 'owner_id'];
    use HasFactory;

    public function report() {
        $this->hasOne(EventReportRemark::class, 'id', 'report_id');
    }

    public function owner(){
        return $this->hasOne(User::class, 'vid', 'owner_id');
    }
}
