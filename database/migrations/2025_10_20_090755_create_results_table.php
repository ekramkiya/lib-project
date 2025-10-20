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
       Schema::create('results', function (Blueprint $table) {
    $table->id();
    $table->foreignId('test_order_item_id')->constrained()->cascadeOnDelete();
    $table->string('result_value')->nullable();
    $table->string('unit')->nullable();
    $table->string('reference_range')->nullable();
    $table->boolean('is_abnormal')->default(false);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
