<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopsubs', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();
            $table->string('code',8);
            $table->char('image',30);
            $table->string('description',300)->nullable();
            $table->integer('shopcat_id');
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
        Schema::dropIfExists('shopsubs');
    }
}
