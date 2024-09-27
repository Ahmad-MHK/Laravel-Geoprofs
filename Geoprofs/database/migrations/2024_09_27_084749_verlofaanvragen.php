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
        Schema::create('verlofaanvragen', function (Blueprint $table) {
            $table->id();
            $table->string('verlofReden');
            $table->string('verlofSoort');
            $table->date('aanvraagDatum');
            $table->date('StartDatum');
            $table->date('EindDatum');
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
