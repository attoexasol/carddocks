<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('role_form_operations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('RoleID',);
            $table->char('Permission', 5);
            $table->bigInteger('FormID',);
            $table->char('DataMode', 7);
            $table->string('EntryUserID', 150);
            $table->unique(['RoleID', 'FormID']);
            $table->timestamps();


        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('role_form_operations');
    }
};
