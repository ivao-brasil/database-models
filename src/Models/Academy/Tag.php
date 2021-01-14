<?php


namespace IvaoBrasil\Models\Academy;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "academy_tags";

    protected $fillable = [
        "name", "created_at", "updated_at"
    ];

    protected $visible = [
        "id", "name", "created_at", "updated_at"
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'academy_categories_tags');
    }
}