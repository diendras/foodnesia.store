<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();    
            $table->string('email',30);
            $table->string('hp',15);
            $table->string('image',30);
            $table->string('web',50)->nullable();
            $table->string('company',100)->nullable();
            $table->string('address',200)->nullable();
            $table->string('image1',30)->nullable();
            $table->string('name1',200)->nullable();
            $table->string('jabatan',200)->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
