<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',40);
            $table -> string('stazione_partenza', 80);
            $table -> string('stazione_arrivo ', 80);
            $table -> string('codice_treno', 20);
            $table -> time('orario_arrivo');
            $table -> integer('n_carrozze');
            $table -> time('orario_partenza');
            $table -> boolean('in_orario');
            $table -> boolean('cancelato');
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
        Schema::dropIfExists('trains');
    }
};
