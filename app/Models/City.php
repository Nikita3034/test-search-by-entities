<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = ['id', 'rid', 'name', 'slug'];

    public function district()
    {
        return $this->hasMany('App\Models\District', 'cid', 'id');
    }

    public function region()
    {
        return $this->belongsTo('App\Region', 'rid');
    }

    public function getTableName() {
        return $this->table;
    }
}
