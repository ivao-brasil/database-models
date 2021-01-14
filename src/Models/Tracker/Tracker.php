<?php


namespace IvaoBrasil\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $table = 'tracker';

    protected $fillable = [
        'name', 'description', 'date_start', 'date_end', 'status', 'creator',
    ];

    public function rules()
    {
        return $this->hasMany('App\Models\Rule', 'id_tracker');
    }

    public function data() {
        return $this->hasMany('App\Models\TrackerData', 'id_tracker');
    }
}