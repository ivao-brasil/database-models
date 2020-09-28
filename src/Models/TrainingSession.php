<?php

namespace IvaoBrasil\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    use HasFactory;

    protected $visible = [
        "id", "rating", "type", "occurrenceDate", "local", "owner"
    ];
    protected $casts = [
        'occurrenceDate' => 'DateTime',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
