<?php

namespace IvaoBrasil\Models\HQ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class StaffAppointment extends Model {
    use HasFactory;

    protected $visible = ['vid', 'position', 'appointed_at', 'status'];

    protected $fillable = ['vid', 'position', 'status'];

    protected $dates = [
        'appointed_at'
    ];

    public function staff() {
        return $this->belongsTo(User::class);
    }
}

