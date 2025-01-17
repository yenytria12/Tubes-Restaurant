<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
    if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip_address')->nullable();
        });
    }
}


    public function down()
    {
        Schema::dropIfExists('users');
    }
}

