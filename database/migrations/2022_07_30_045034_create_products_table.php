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
            $table->integer('users_id');
            $table->integer('categories_id');
            $table->integer('benefits_id');
            $table->string('name');
            $table->longText('description');
            $table->string('slug');
            $table->integer('views');
            $table->integer('sales');
            $table->integer('priority');

            $table->softDeletes();
            $table->string('name');
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
