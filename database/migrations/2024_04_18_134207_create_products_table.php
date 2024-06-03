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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};


// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateLaptopsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('laptops', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->text('description');
//             $table->string('processor');
//             $table->string('ram');
//             $table->string('storage');
//             $table->string('graphics');
//             $table->string('display');
//             $table->string('operating_system');
//             $table->string('connectivity');
//             $table->text('ports');
//             $table->string('battery');
//             $table->string('image')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('laptops');
//     }
// }
