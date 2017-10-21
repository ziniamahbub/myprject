<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibGroupDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_group_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name',50);
            $table->string('group_name_local',50);
			$table->integer('contact_number');
			$table->string('contact_person',50);
			$table->string('website',50);
			$table->string('country',50);
			$table->text('address',300);
			$table->string('email',50);
			$table->integer('status');
			$table->text('remarks',300);
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
        //
    }
}
