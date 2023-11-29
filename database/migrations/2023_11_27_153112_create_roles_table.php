<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 150);
            $table->text('Description');
            $table->char('DataMode', 2)->default('A'); 
            $table->string('EntryUserID',); 
            $table->integer('ApplicationId');
            $table->unique(['Name', 'ApplicationId']);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
