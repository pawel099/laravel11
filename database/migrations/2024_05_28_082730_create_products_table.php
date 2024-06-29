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
            
            $table->id();
            $table->string('name');
            $table->string('description', 1500);
            
            $table->integer('amount');
            $table->decimal('price');
            $table->timestamps();
            $table->foreignId("user_id")->nullable()->constrained() ;
        });




        Schema::table('products', function (Blueprint $table) {
            
            $table->string('thumbnail')->before('name')->nullable();
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
