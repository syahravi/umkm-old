<?php

// database/migrations/xxxx_xx_xx_create_umkms_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmTable extends Migration
{
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('whatsapp')->nullable();
            $table->string('thumbnail')->nullable();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umkm');
    }
}
