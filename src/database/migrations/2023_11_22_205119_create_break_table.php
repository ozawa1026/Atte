<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('break', function (Blueprint $table) {
            $table->id();
            $table->timestamp('break_start', $precision = 0);
            $table->timestamp('break_end', $precision = 0);
            $table->foreignId('users_id')->constrained()->cascadeOnDelete();
            $table->foreignId('work_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('break');
    }
}
