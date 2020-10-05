<?php


namespace IvaoBrasil\Models;


use Illuminate\Database\Eloquent\Model;

class SupportAwardRequest extends Model
{
    protected $table = "support_award_requests";

    protected $fillable = [
        "member_vid", "type", "level", "granted"
    ];

    protected $visible = [
        "id", "member_vid", "member", "type", "level", "granted", "created_at", "updated_at"
    ];

    public function member()
    {
        return $this->belongsTo(User::class);
    }
}