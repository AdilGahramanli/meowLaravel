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
            $table->uuid('message_id');
            $table->foreignId('id_users')->constrained('users');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->text('content')->limit(300);
            // $table->timestamps();
            // $table->foreignUuid('message_id')->constrained(
            //     table->'users', indexName:'id');
            // );
            $table->text('message')->limit(300);
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
