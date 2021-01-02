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
            $table->id();
            $table->string('product_name1');
            $table->string('product_new_price');
            $table->string('product_old_price');
            $table->string('product_image1');
            $table->string('product_image2');
            $table->string('product_name2');
            $table->text('description');
            $table->string('highlights1');
            $table->string('highlights2');
            $table->string('highlights3');
            $table->string('highlights4');
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
