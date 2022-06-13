<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('evaluations', function (Blueprint $table) {
          $table->id()->autoIncrement();
          $table->integer('user_id')->nullable();
          $table->integer('project_id')->nullable();
          $table->integer('faculty_id')->nullable();
          $table->integer('grade')->nullable();
          $table->string('IP', 20)->nullable();
          $table->integer('note')->nullable();
          $table->string('status', 5)->nullable()->default('New');
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
        Schema::dropIfExists('evaluations');
    }
}
