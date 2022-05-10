<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->decimal('quartile');
            $table->string('course_name');
            $table->string('test_name');
            $table->decimal('EC', 2, 1);
//            Lowest grade to pass so average calculations can be applied
            $table->decimal('lowest_passing_grade', 3, 1)->default(5.5);
            $table->decimal('best_grade', 3, 1)->nullable();
//            Date that the grade was larger than or equal to the lowest passing gradephp
            $table->timestamp('passed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
