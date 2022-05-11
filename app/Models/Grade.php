<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'quartile',
        'course_name',
        'test_name',
        'EC',
        'lowest_passing_grade',
        'best_grade',
    ];

//    TODO: passed_at will be set even when a grade is too low (<5.5)
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
        }
    }


    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class); // select * FROM course WHERE cours_id = 'id current course'
    }
}
