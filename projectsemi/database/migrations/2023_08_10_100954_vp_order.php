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
        //
        Schema::create('vp_order', function (Blueprint $table) {
            $table->increments('or_id');
            $table->string('or_email');
            $table->double('or_phone');
            $table->string('or_address');
            $table->tinyInteger('or_status');

            $table->integer('or_qty')->unsigned();
            

            $table->integer('or_user')->unsigned()->nullable();
            $table->foreign('or_user')->references('id')->on('vp_users')->onDelete('cascade');

            $table->integer('or_product')->unsigned()->nullable();
            $table->foreign('or_product')->references('product_id')->on('vp_products')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('vp_order');
    }
};
