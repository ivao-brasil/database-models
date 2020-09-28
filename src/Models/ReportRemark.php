<?php


namespace IvaoBrasil\Models;


use Illuminate\Database\Eloquent\Model;

class ReportRemark extends Model
{
    protected $table = "report_remarks";

    protected $fillable = [
        "report_id", "author_vid", "contents"
    ];

    protected $visible = [
        "id", "report_id", "author_vid", "contents", "created_at", "updated_at"
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}