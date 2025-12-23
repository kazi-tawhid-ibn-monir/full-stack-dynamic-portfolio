<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('field_of_study');
            $table->string('institution');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
