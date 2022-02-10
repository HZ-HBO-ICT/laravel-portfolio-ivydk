<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

//    TODO: fix passed date
    public function complete()
    {
        $this->completed = 1;
        $this->save();
    }
}
