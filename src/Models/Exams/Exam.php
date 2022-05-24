<?php

namespace IvaoBrasil\Models\Exams;

use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class Exam extends Model
{
    protected $casts = [
        'end_date' => 'datetime:Y-m-d H:00',
    ];
    
    public function examiner() {
        return $this->belongsTo(User::class);
    }

    public function member() {
        return $this->belongsTo(User::class);
    }
}
