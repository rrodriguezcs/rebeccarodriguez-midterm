<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('equipment_id')->constrained('equipment')->ondelete('cascade');
            $table->string('software');
            $table->string('updates');
            $table->string('services');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
