<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre', 200);
            $table->enum('type', array('achat', 'vente','partenaire'));
            $table->text('description');
            $table->string('pays', 50);
            $table->integer('quantity');
            $table->float('price');
            $table->enum('userType', array('societe', 'particulier'));
            $table->unsignedInteger('user_id')->index() ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
