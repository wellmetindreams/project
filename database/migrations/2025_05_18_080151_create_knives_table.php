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
            $table->foreignId('maker_id')->constrained('makers');
            $table->foreignId('collection_id')->constrained('collection');
            $table->foreignId('knife_type')->constrained('knife_types');
            $table->integer('price');
            $table->integer('full_length');
            $table->integer('blade_length');
            $table->integer('blade_width');
            $table->integer('butt_thickness');
            $table->integer('weight');
            $table->string('material');
            $table->string('country');
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
