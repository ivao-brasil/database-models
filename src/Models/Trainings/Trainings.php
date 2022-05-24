<?php

namespace IvaoBrasil\Models\Trainings;
use Illuminate\Database\Eloquent\Model;

use IvaoBrasil\Models\Core\User;

class Trainings extends Model
{
    public function trainer() {
        return $this->belongsTo(User::class);
    }

    public function member() {
        return $this->belongsTo(User::class);
    }

    public function type() {
        return $this->hasOne(TrainingType::class, 'training_type_id');
    }
}