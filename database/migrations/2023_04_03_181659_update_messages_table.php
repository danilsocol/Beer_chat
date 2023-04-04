<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table(
            'messages',
            function (Blueprint $table) {
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            }
        );
    }

    public function down()
    {
        Schema::table(
            'messages',
            function (Blueprint $table) {
                $table->dropColumn('updated_at');
                $table->dropColumn('created_at');
            }
        );
    }
};
