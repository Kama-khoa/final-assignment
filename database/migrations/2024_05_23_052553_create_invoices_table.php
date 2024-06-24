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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained();
            $table->foreignId('provider_id')
                  ->constrained();
            $table->string('note')
                  ->nullable();
            $table->integer('state');
            $table->timestamps();
        });
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laptop_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('invoice_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->integer('quantity');
            $table->decimal('price',12,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoice_detail');
    }
};
