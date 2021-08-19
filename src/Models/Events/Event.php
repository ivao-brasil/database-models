<?php

namespace IvaoBrasil\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    
    public function created_by() {
        return $this->belongsTo(User::class);
    }
}
