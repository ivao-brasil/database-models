<?php


namespace IvaoBrasil\Models\SupportAward;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IvaoBrasil\Models\Core\User;
use IvaoBrasil\Models\TrainingSchedule\TrainingSession;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        "connectionType", "callsign", "status", "owner_vid", "session_id", "remarks"
    ];

    protected $visible = [
        "id", "connectionType", "callsign", "status", "session", "owner", "created_at", "updated_at", "session_id", "remarks"
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

    public function remarks()
    {
        return $this->hasMany(ReportRemark::class);
    }
}
