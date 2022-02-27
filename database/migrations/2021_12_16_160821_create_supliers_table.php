<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supliers', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();    
            $table->string('email',30);
            $table->string('hp',15);
            $table->string('image',30)->nullable();
            $table->string('code',5)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('alamat',200)->nullable();
            $table->string('npwp',30)->nullable();
            $table->integer('hutang')->default(0);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('supliers');
    }
}
