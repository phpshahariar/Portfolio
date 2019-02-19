<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('back_ends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading_name');
            $table->string('title');
            $table->string('sub_title');
            $table->string('email');
            $table->string('phone');
            $table->text('own_address');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('back_ends');
    }
}
