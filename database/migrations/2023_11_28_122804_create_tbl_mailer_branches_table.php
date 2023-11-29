<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('tbl_mailer_branches', function (Blueprint $table) {
            $table->id();
            $table->string('BranchName');
            $table->boolean('IsAddress');
            $table->string('BranchCode', 50);
            $table->string('ShortName', 100);
            $table->string('AreaHeadEmail', 100);
            $table->char('DataMode', 10);
            $table->string('LastSFSerial', 10);
            $table->string('ROUTING_NO', 10);
            $table->bigInteger('CHQ_LEAF_LAST_SL');
            $table->bigInteger('WingId_SD');
            $table->string('CBPZone', 30);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('tbl_mailer_branches');
    }
};
