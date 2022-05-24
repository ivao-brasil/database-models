<?php

namespace IvaoBrasil\Models\Trainings;
use Illuminate\Database\Eloquent\Model;

use IvaoBrasil\Models\Core\User;

class Trainings extends Model
{
    protected $casts = [
        'end_date' => 'datetime:Y-m-d H:00',
    ];
    
    public function trainer() {
        return $this->belongsTo(User::class);
    }

    public function member() {
        return $this->belongsTo(User::class);
    }

    public function type() {
        return $this->hasOne(TrainingType::class, 'id','training_type_id');
    }
}