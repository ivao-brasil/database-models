<?php

namespace IvaoBrasil\Models\Ais;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

class AisAirport extends Model
{
    use HasFactory;

    protected $visible = [
        "id", "icao", "rwy_configuration", "rmk", "updated_by", "active"
    ];

    protected $fillable = [
        "icao", "rwy_configuration", "rmk", "updated_by", "active"
    ];

    protected $table = "ais_airports";

    
    public function updatedBy() {
        return $this->belongsTo(User::class);
    }
}
