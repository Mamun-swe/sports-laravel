<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('about_content');
            $table->text('address');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('discord');
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
        Schema::dropIfExists('about_contacts');
    }
}
