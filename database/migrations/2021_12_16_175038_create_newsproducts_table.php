<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();
            $table->char('code',10);
            $table->char('image',30); 
            $table->char('image2',30)->nullable(); 
            $table->integer('price')->default(0);
            $table->integer('pricedisc')->default(0);
            $table->Text('description1',200)->nullable();
            $table->LongText('description2')->nullable();
            $table->integer('sector_id')->nullable();
            $table->integer('newscat_id')->nullable();
            $table->integer('newssub_id')->nullable();
            $table->integer('User_id')->nullable();
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
        Schema::dropIfExists('newsproducts');
    }
}
