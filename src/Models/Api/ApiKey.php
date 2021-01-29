<?php

namespace IvaoBrasil\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    protected $visible = [
        "id", "key", "domain"
    ];

    protected $fillable = [
        "key", "domain"
    ];

    protected $table = "api_key";
}
