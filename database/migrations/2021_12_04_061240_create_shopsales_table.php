<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopsales', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('code',5)->nullable();
            $table->string('status')->default(0);
            $table->integer('grandprice');
            $table->integer('uniqcode');
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
        Schema::dropIfExists('shopsales');
    }
}
