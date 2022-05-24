<?php

namespace IvaoBrasil\Models\Trainings;

use IvaoBrasil\Models\Core\User;

class Trainings
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