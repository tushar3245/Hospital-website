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



            $table->unsignedBigInteger('category_id');
 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            
            $table->unsignedBigInteger('sub_category_id');
 
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');

            $table->double('price',8,2);
            $table->double('discounted_price',8,2)->nullable();
            $table->string('image');
            $table->tinyinteger('is_featured')->coment('0:inactive,1:Active');
            $table->tinyinteger('status')->coment('0:inactive,1:Active');
            $table->longText('description');
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
