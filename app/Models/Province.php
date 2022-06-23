<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'cities';
    protected $fillable = ['id','province_id','type','city_name','postal_code'];
    protected $primaryKey = 'id';
}
