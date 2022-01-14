<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuditeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomAud');
            $table->string('prenAud');
            $table->string('mailAud')->nullable();
            $table->bigInteger('contactAud',10);
            $table->string('maFormation');
            $table->string('payAud');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditeurs');
    }
}
