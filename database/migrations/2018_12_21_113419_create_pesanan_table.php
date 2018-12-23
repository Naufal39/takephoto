<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pemesan')->unsigned();
            $table->string('photographer')->unsigned();
            $table->string('email')->unsigned();
            $table->text('note');
            $table->timestamps();

            $table->foreign('pemesan')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('photographer')->references('user_id')->on('posts')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
