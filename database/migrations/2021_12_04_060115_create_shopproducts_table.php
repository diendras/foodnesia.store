<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100)->index();
            $table->char('code',10);
            $table->char('image',30);
            $table->integer('hpp')->default(0);
            $table->integer('price')->default(0);
            $table->integer('pricedisc')->default(0);
            $table->integer('stock')->default(0);
            $table->integer('status')->default(1);
            $table->string('description',300)->nullable(); 
            $table->char('image2',30)->nullable();
            $table->integer('shopcat_id')->nullable();
            $table->integer('shopsub_id')->nullable();
            $table->integer('suplier_id')->nullable();
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
        Schema::dropIfExists('shopproducts');
    }
}
