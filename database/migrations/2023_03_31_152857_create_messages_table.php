<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamp('message_date');
            $table->string('text');
            $table->foreignId('chat_id')->constrained('chats')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
