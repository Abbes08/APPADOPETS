<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('mascotas', function (Blueprint $table) {
        $table->boolean('activo')->default(true); // El valor por defecto es true (activo)
    });
}

public function down()
{
    Schema::table('mascotas', function (Blueprint $table) {
        $table->dropColumn('activo');
    });
}

};
