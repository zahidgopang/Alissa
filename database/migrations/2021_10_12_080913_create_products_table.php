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
            $table->string('name');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('detail');
            $table->string('item_no');
            $table->string('unit');
            $table->string('moq');
            $table->string('price');
            $table->string('packing');
            $table->string('color');
            $table->string('pro_size');
            $table->string('pack_size');
            $table->string('package');
            $table->string('material');
            $table->string('video');
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
