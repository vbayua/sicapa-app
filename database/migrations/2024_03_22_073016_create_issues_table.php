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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status');
            $table->text('persyaratan')->nullable();
            $table->text('root_cause_analysis')->nullable();
            $table->text('evaluation')->nullable();
            $table->foreignId('capa_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->foreignId('ca_id')->nullable();
            $table->foreignId('pa_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
