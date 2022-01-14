<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->datetime('dateform');
            $table->date('datefin');
            $table->integer('heure');
            $table->string('lieu');
            $table->decimal('prix');
            $table->unsignedBigInteger('audit_id');
            $table->foreign('audit_id')->references('id')
                  ->on('auditeurs')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
        Schema::dropIfExists('formations');
    }
}
