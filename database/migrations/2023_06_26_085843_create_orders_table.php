<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderid');
            $table->unsignedInteger('productid');
            $table->integer('quantity');
            $table->unsignedInteger('supplierid');
            $table->date('order_date');
            $table->timestamps();

            $table->foreign('productid')->references('productid')->on('products');
            $table->foreign('supplierid')->references('supplierid')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
