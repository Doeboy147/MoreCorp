<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('name')->nullable(false);
            $table->string('sku')->nullable(false);
            $table->string('price')->nullable(false);
            $table->string('description');
            $table->string('quantity');
            $table->integer('active')->default(1);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
