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
        Schema::create('produits_name', function (Blueprint $table) {
            $table->id();
        
            $table->string('nom');
            $table->string('detail');
            $table->string('image');
            $table->string('detail1')->nuable();
            $table->string('detail2')->nuable();
            $table->string('detail3')->nuable();
            $table->string('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits_name');
    }
};
