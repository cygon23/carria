<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()

    {

        Schema::create('blog_tags', function (Blueprint $table) {

            $table->id();

            $table->integer('blog_id');

            $table->string('name');

            $table->timestamps();

        });

    }


    public function down()

    {

        Schema::dropIfExists('blog_tags');

    }
};
