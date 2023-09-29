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
        Schema::create('faq_landings', function (Blueprint $table) {
            // $table->id();
            $table->char('idfaq',10);
            $table->string('pertanyaan',1000);
            $table->string('jawaban',1000);
            $table->primary('idfaq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_landings');
    }
};
