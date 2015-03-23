<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOriginalColumnToLtrTranslations extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public
    function up()
    {
        Schema::table('ltm_translations', function (Blueprint $table)
        {
            $table->text('original')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        Schema::table('ltm_translations', function (Blueprint $table)
        {
            $table->dropColumn('original');
        });
    }
}