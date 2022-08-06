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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('client_id')->unsigned();
            $table->string('salutation')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('office_phone');
            $table->string('company');
            $table->string('website')->nullable();
            $table->string('vat_tax_no')->nullable();
            $table->string('gander')->nullable();
            $table->string('address')->nullable();
            $table->text('descriptions')->nullable();
            $table->string('image')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('postalcode');
            $table->string('shipping_address')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
