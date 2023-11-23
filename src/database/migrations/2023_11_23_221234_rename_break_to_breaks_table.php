<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameBreakToBreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breaks', function (Blueprint $table) {
            $table->id();
            $table->timestamp('breaks_start', $precision = 0);
            $table->timestamp('breaks_end', $precision = 0);
            $table->foreignId('users_id')->constrained()->cascadeOnDelete();
            $table->foreignId('works_id')->constrained()->cascadeOnDelete();
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
        Schema::table('breaks', function (Blueprint $table) {
            //
        });
    }
}
