<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breeds', function ($table) {
            $table->string('name')->nullable();
        });

        Schema::table('animals', function ($table) {
            $table->string('breed_name')->nullable();
            $table->string('animal_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('neutered')->nullable();
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('years')->nullable();
            $table->integer('breed_id')->nullable();
        });

        Schema::table('animal_adopted', function ($table) {
            $table->json('animals')->nullable();
            $table->BigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('breeds', function ($table) {
            $table->dropColumn('name');
        });

        Schema::table('animals', function ($table){
            $table->dropColumn('breed_name');
            $table->dropColumn('animal_name');
            $table->dropColumn('gender');
            $table->dropColumn('neutered');
            $table->dropColumn('image');
            $table->dropColumn('description');
            $table->dropColumn('years');
            $table->dropColumn('breed_id');
        });

        Schema::table('animal_adopted', function ($table){
            $table->dropColumn('animals');
            $table->dropColumn('user_id');
        });
    }
}
