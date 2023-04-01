<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamp('last_message_date')->useCurrent();
            $table->foreignId('first_user_id')->constrained('users')->onUpdate('cascade');
            $table->foreignId('second_user_id')->constrained('users')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
};
