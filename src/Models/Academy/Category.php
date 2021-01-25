<?php


namespace IvaoBrasil\Models\Academy;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "academy_categories";

    protected $fillable = [
        "name", "created_at", "updated_at"
    ];

    protected $visible = [
        "id", "name", "tags", "created_at", "updated_at"
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'academy_categories_tags');
    }

    public function manuals()
    {
        return $this->belongsToMany(Tag::class, 'academy_categories_manuals');
    }
}