<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCartegriseidEtatserviceidTypeserviceidForiegnToService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->unsignedBigInteger('typeservice_id');
            $table->foreign('typeservice_id')->references('id')->on('type_services');
            $table->unsignedBigInteger('etatservice_id');
            $table->foreign('etatservice_id')->references('id')->on('etat_services');
            $table->unsignedBigInteger('cartegrise_id');
            $table->foreign('cartegrise_id')->references('id')->on('carte_grises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('typeservice_id');
            $table->dropColumn('etatservice_id');
            $table->dropColumn('cartegrise_id');
        });
    }
}
