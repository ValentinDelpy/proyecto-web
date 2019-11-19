<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PivotTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_champion', function (Blueprint $table){
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('champion_id');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');

            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade');
        });

        Schema::create('champion_team', function(Blueprint $table){
            $table->unsignedBigInteger('champion_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade');

            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
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
        //
    }
}
