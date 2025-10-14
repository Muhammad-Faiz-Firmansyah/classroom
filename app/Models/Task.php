<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Matkul;

class Task extends Model
{
    protected $guarded = ["id"];

    protected $fillable = [
        "title",
        "notes",
        "deadline",
        "class_id",
        "matkul_id"
    ];

    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function matkul(){
        return $this->belongsTo(Matkul::class);
    }
}
