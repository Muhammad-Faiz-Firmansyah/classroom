<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Classes extends Model
{
    protected $guarded = ['id'];

    public function tasks(){
        return $this->hasMany(Task::class);

    }

    public function class(){
        return $this->belongsTo(Classes::class);
    }
}
