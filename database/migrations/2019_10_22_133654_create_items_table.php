<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('cost');
            $table->integer('AD');
            $table->integer('AP');
            $table->timestamps();
        });

        Schema::create('champion_item', function (Blueprint $table) {
            $table->unsignedBigInteger('champion_id');
            $table->unsignedBigInteger('item_id');
            $table->boolean('contact');

            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champion_item');
        Schema::dropIfExists('items');
    }
}
