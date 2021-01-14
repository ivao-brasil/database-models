<?php


namespace IvaoBrasil\Models\Academy;


use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $table = "academy_manuals";

    protected $fillable = [
        "title", "description", "language", "file_path", "is_visible", "created_at", "updated_at"
    ];

    protected $visible = [
        "id", "title", "description", "language", "file_path", "is_visible", "tags", "created_at", "updated_at"
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'academy_manuals_tags');
    }
}
