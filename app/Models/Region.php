<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';
    protected $fillable = ['id', 'name', 'slug'];

    public function city()
    {
        return $this->hasMany('App\Models\City', 'rid', 'id');
    }

    public function getTableName() {
        return $this->table;
    }
}
