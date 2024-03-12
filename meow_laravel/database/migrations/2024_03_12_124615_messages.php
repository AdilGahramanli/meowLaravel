<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('messages', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            // $table->text('content')->limit(300);
            // $table->timestamps();
            $table->id();
            $table->text('content')->limit(300);
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
        Schema::dropIfExists('messages');
    }
};
