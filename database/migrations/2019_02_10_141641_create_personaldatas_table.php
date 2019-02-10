<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatepersonaldatasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->string('residentialstatus');
            $table->string('emptype');
            $table->string('occupation');
            $table->string('workstatus');
            $table->string('employer');
            $table->string('dateemployed');
            $table->string('monthlysalary');
            $table->string('annualsalary');
            $table->string('propertytype');
            $table->string('declaration');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personaldatas');
    }
}
