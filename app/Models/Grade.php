<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    private $best_grade;
    /**
     * @var \Illuminate\Support\Carbon
     */
    private $passed_at;
    /**
     * @var mixed
     */
    private $id;

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

    /**
     * adds all the ECs
     *
     * @return int|mixed
     */
    public function totalECs(): int
    {
        $total = 0;
        foreach ($this->id as $id) {
            $total += $this->EC;
        }

        return $total;
    }
}
