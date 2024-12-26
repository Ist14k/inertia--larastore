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
        Schema::create('variation_types', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->index()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('type');
        });

        Schema::create('variation_type_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variation_type_id')->index()->constrained('variation_types')->cascadeOnDelete();
            $table->string('name');
        });

        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->index()->constrained()->cascadeOnDelete();
            $table->json('variation_type_object_ids');
            $table->integer('quantity')->nullable();
            $table->decimal('price', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};