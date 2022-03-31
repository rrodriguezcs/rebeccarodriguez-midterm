<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufac extends Model
{
    use HasFactory;
    protected $fillable = ['manufacturer', 'manufac_email', 'manufac_phone'];

    protected $table = 'manufac';

    public function Equipment(){

        return $this ->hasMany(Equipment::class);

    }
}