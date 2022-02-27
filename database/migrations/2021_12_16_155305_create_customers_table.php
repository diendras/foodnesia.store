<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();    
            $table->string('email',30);
            $table->string('hp',15);
            $table->string('image',30);
            $table->string('idgekmam',5);
            $table->string('code',5);
            $table->string('web',50)->nullable();
            $table->integer('user_id');
            $table->string('address',200)->nullable();
            $table->string('ktp',30)->nullable();
            $table->string('imgktp',30)->nullable();
            $table->string('npwp',30)->nullable();
            $table->string('imgnpwp',30)->nullable();
            $table->string('nib',30)->nullable();
            $table->string('imgnib',30)->nullable();
            $table->string('company',100)->nullable();
            $table->string('group',100)->nullable();
            $table->string('sector',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('loan')->default(0);
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
        Schema::dropIfExists('customers');
    }
}
