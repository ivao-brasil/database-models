<?php


namespace IvaoBrasil\Models\SupportAward;


use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;

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