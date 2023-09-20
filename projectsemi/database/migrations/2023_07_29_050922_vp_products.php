<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->double('product_price');
            $table->string('product_img');
            $table->string('product_warranty');
            $table->string('product_accessories');
            $table->string('product_condition');
            $table->string('product_promotion');
            $table->tinyInteger('product_status');
            $table->text('product_description');
            $table->tinyInteger('product_featured');
            $table->integer('product_cate')->unsigned();

            $table->foreign('product_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vp_products');
    }
};
