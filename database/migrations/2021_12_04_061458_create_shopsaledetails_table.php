<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsaledetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopsaledetails', function (Blueprint $table) {
            $table->id();
            $table->integer('shopsale_id');
            $table->integer('shopproduct_id');
            $table->string('name',100)->nullable();
            $table->integer('price');
            $table->integer('disc')->default(0);
            $table->integer('qty'); 
            $table->integer('total');
            $table->string('reason',200)->nullable();
            $table->string('description',200)->nullable();
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
        Schema::dropIfExists('shopsaledetails');
    }
}
