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
        Schema::create('knife', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('makers')->onDelete('cascade');
            $table->foreignId('collection_id')->constrained('collection')->onDelete('cascade');
            $table->foreignId('knife_type_id')->constrained('knife_types')->onDelete('cascade');
            $table->foreignId('material_id')->constrained('material_types')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->integer('price');
            $table->integer('full_length');
            $table->integer('blade_length');
            $table->integer('blade_width');
            $table->integer('butt_thickness');
            $table->integer('weight');
            $table->longText('description');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knife');
    }
};
