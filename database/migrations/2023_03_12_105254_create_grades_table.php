<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->float('weighing_factor')->default(1.0);
            $table->decimal('lowest_passing_grade', 3, 1)->default(5.5)->comment('Lowest grade to pass so average calculations can be applied');
            $table->decimal('best_grade', 3, 1)->nullable();
            $table->timestamps();

            $table->foreignId('course_id')->onDelete('cascade');
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
};
