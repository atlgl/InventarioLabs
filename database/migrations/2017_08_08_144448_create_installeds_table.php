<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstalledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('software_id')->unsigned();
            $table->integer('inventory_id')->unsigned();

            $table->foreign('software_id')
                ->references('id')->on('softwares')
                ->onDelete('cascade');

            $table->foreign('inventory_id')
                ->references('id')->on('inventories')
                ->onDelete('cascade');

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
        Schema::dropIfExists('installeds');
    }
}
