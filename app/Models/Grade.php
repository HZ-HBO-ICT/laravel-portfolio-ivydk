<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addResult($newGrade): void
    {
        if($newGrade >= $this->best_grade)
        {
            $this->best_grade = $newGrade;
            $this->passed_at = now();
        }
    }
}
