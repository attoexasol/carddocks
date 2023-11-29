<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('DesignationName', 200);
            $table->string('Remarks', 300);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};