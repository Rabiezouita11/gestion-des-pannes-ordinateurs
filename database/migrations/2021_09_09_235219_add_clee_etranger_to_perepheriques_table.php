<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCleeEtrangerToPerepheriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perepheriques', function (Blueprint $table) {
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('postes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perepheriques', function (Blueprint $table) {
            //
        });
    }
}
