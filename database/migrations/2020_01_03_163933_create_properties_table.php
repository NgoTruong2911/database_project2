<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('length',4,2); // chiều dài
            $table->float('width',4,2); // chiều rộng
            $table->float('height',4,2); // chiều cao
            $table->float('weight',4,2); // cân nặng
            $table->integer('amount'); // số lượng
            $table->float('price',6,3); // giá trị thật của hàng hóa
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
        Schema::dropIfExists('properties');
    }
}
