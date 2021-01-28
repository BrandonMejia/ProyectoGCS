<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->integer('dni')->unique();
            $table->string('email')->nullable()->change();
            $table->string('categoria');
            $table->unsignedBiginteger('centro_id')->nullable();
            $table->foreign('centro_id') 
                -> references ('id') -> on ('centros')
                -> onDelete('set null'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apellidoP', 'apellidoM','dni','centro_id','categoria');
        });
    }
}
