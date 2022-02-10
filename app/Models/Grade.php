<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * checks if the new result >= current grade
     * when the grade is >= current grade the new grade becomes the best_grade and
     * the passes_at becomes the current day
     *
     * @param $newGrade
     * @return void
     */
    public function addResult($newGrade): void
    {
        if ($newGrade >= $this->best_grade) {
            $this->best_grade = $newGrade;
            $this->passed_at = now();
        }
    }
}
