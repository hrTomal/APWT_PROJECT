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
            $table->increments('id');
            //$table->ProductName();
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->integer('price');
            $table->string('type');
            $table->tinyInteger('status')->default(0);
            $table->integer('quantity')->default(1);
            $table->integer('review');
            $table->integer('offer_price')->nullable();
           // $table->string('product_image');
            $table->integer('sellerId')->unsigned();
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
        Schema::dropIfExists('products');
    }
}
