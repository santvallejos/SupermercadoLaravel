<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->unsignedBigInteger('categoria_id');
            $table->string('slug')->unique();
            $table->string('descripcion')->unique();
            $table->bigInteger('cantidad')->unsigneg();
            $table->string('imagen_product');
            $table->string('precio');
                 $table->timestamps();
                 
                 $table->foreign('categoria_id')->references('id')->on('categories');
        });
        
    }
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
