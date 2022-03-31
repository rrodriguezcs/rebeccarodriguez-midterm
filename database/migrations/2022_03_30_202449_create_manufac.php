<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('manufac', function (Blueprint $table) {
            $table->id();
            $table->text('manufacturer');
            $table ->text('manufac_email');
            $table ->text('manufac_phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manufac');
    }
};