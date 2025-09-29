<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Matkul;

class Task extends Model
{
    protected $guarded = ["id"];
    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function matkul(){
        return $this->belongsTo(Matkul::class);
    }
}
