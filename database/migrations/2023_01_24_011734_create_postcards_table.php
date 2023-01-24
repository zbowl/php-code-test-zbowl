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
        Schema::create('postcards', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_name');
            $table->string('street_1');
            $table->string('street_2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->text('message');
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
        Schema::dropIfExists('postcards');
    }
};
