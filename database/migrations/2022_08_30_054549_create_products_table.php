<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->unsignedBigInteger('quantity')->default(10);
            $table->string('tax')->nullable();
            $table->text('descriptions');
            $table->enum('status', ['instock', 'out_of_stock'])->default('instock');
            $table->string('files')->nullable();
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
};
