<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Forms\NotesForm;

class Notes extends Model
{
    use HasFactory;
    protected $fillable = ['notes','services', 'software', 'equipment_id'];


    public function equipment(){

        return $this->belongsTo(Equipment::class);
    
    }

    
    
}