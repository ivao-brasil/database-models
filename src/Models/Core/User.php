<?php

namespace IvaoBrasil\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = "vid";
    public $incrementing = false;

    protected $fillable = [
        'vid', 'firstName', 'lastName', 'atcRating', 'pilotRating', 'division', 'country', 'staff', 'isBSPGMember'
    ];

    protected $visible = [
        'vid', 'firstName', 'lastName', 'atcRating', 'pilotRating', 'division', 'country', 'staff', 'isBSPGMember'
    ];

    protected $casts = [
        'staff' => 'array',
    ];

    public function getVid()
    {
        return $this->getAttribute('vid');
    }
}
