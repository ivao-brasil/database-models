<?php

namespace IvaoBrasil\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = "vid";

    protected $fillable = [
        'vid', 'firstName', 'lastName', 'atcRating', 'pilotRating', 'division', 'country', 'staff'
    ];

    protected $visible = [
        'vid', 'firstName', 'lastName', 'atcRating', 'pilotRating', 'division', 'country', 'staff'
    ];

    protected $casts = [
        'staff' => 'array',
    ];

    public function getVid()
    {
        return $this->getAttribute('vid');
    }
}
