<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserToLivresTable extends Migration
{
    //bommmantaire
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
       {
        Schema::table('livres', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');

    $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livres', function (Blueprint $table) {
            //
        });
    }
}
