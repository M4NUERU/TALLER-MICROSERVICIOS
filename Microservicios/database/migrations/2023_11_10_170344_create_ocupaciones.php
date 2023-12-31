<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
     Schema::create('ocupaciones', function (Blueprint $table) {
            $table->string('descripcion',150);
            $table->timestamps();
            $table->id(); 
        });
    }


    public function down(): void
    {
    Schema::dropIfExists('ocupaciones');
    }
};
