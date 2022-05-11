<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'CU_code',
        'name',
        'credits',
        'passed_at'
    ];

    /**
     * @return HasMany
     */
    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class); // select * FROM grade WHERE grade_id = 'current grade id'
    }
}
