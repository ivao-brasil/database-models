<?php


namespace IvaoBrasil\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        "connectionType", "callsign", "status", "owner_vid", "session_id"
    ];

    protected $visible = [
        "id", "connectionType", "callsign", "status", "session", "owner", "created_at", "updated_at", "session_id"
    ];

    public function session()
    {
        return $this->belongsTo(TrainingSession::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function getOwner(): User
    {
        return $this->getRelation('owner');
    }
}
