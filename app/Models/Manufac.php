<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufac extends Model
{
    use HasFactory;
    protected $fillable = ['manufacturer', 'manfac_email', 'manfac_phone'];

    protected $table = 'manufac';

    public function Equipment(){

        return $this ->hasMany(Equipment::class);

    }
}