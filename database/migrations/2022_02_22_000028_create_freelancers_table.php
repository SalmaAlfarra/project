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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('injob');
            $table->boolean('online');
            $table->string('name')->nullable();;
            $table->text('description')->nullable();;
            $table->integer('phone')->nullable();;
            $table->string('email', 250)->unique()->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();;
            $table->char('photo', 100)->nullable();
            $table->string('country')->nullable();;
            $table->rememberToken();
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
        Schema::dropIfExists('freelancers');
    }
};
