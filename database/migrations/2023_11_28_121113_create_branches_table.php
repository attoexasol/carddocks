<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('BranchCode', 100);
            $table->string('BranchName', 100);
            $table->string('Area', 100);
            $table->string('ContactNo', 100);
            $table->string('Address', 1000);
            $table->string('ROUTING_NO', 10);
            $table->bigInteger('CHQ_LEAF_LAST_SL');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
