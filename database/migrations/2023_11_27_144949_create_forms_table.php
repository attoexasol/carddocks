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
        
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 150);
            $table->string('FormName', 150);
            $table->char('DataMode', 2)->default('A'); 
            $table->integer('ApplicationId');
            $table->unique(['name', 'FormName', 'ApplicationId']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
