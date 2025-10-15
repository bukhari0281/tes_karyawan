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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nik')->unique()->nullable();
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->decimal('salery', 12, 2)->nullable();
            $table->date('join_date')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed'])->nullable();
            $table->enum('employment_status', ['permanent', 'contract', 'probation', 'intern'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
