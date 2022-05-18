<?php

namespace IvaoBrasil\Models\Exams;

use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class Exam extends Model
{
    public function examiner() {
        return $this->belongsTo(User::class);
    }

    public function member() {
        return $this->belongsTo(User::class);
    }
}
