<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['photo','nbr_pers', 'Price'];
}
