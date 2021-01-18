<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = "companies";
    protected $fillable = [
    	'id',
		'name',
		'symbol'
    ];
    public $timestamps = false;
}
