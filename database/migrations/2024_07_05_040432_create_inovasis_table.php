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
        Schema::create('inovasis', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("title");
            $table->string("image");
            $table->date("date");
            $table->timestamps();
            $table->string('creator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasis');
    }
};
