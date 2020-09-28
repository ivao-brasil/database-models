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
    protected $fillable = [
        "rating", "type", "occurrenceDate", "local", "owner_vid"
    ];
    protected $dates = [
        'occurrenceDate'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
