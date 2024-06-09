<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('processor');
            $table->string('ram');
            $table->string('storage');
            $table->string('graphics');
            $table->string('display');
            $table->string('operating_system');
            $table->string('connectivity');
            $table->string('ports');
            $table->string('battery');
            $table->text('photo');
            $table->text('advantages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
