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
        Schema::table('t_messages', function (Blueprint $table) {
            $table->dropColumn('send_mail');
        });
        Schema::table('t_messages', function (Blueprint $table) {
            $table->enum('send_mail', ['yes', 'no'])->default('no');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_messages', function (Blueprint $table) {
            $table->dropColumn('send_mail');
        });

        Schema::table('t_messages', function (Blueprint $table) {
            $table->string('send_mail')->nullable();
        });
    }
};
