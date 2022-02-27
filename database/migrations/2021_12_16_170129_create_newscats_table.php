<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewscatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newscats', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();
            $table->string('code',5)->nullable();
            $table->char('image',30)->nullable();
            $table->string('description',300)->nullable();
            $table->integer('sector_id');
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
        Schema::dropIfExists('newscats');
    }
}
