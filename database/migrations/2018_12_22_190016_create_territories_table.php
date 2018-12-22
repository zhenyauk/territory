<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('google_x')->nullable();
            $table->string('google_y')->nullable();
            $table->string('image')->nullable();
            $table->integer('number')->nullable();
            $table->integer('status')->default(1); // na rukah\neopratsovana
            $table->integer('type')->default(1); //selo\gorod\delovaja
            $table->integer('alert')->default(0);
            $table->integer('publisher_id')->nullable();
            $table->date('took')->nullable();
            $table->date('gave')->nullable();
            $table->integer('notice_id')->nullable(); //notice


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
        Schema::dropIfExists('territories');
    }
}
