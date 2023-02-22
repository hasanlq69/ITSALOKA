<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubleshoots', function (Blueprint $table) {
            $table->id();
            $table->string('trouble_req');
            $table->string('department');
            $table->string('trouble_type');
            $table->string('client_name');
            $table->string('trouble_name');

            $table->date('start');
            $table->date('finish')->nullable();
            $table->string('cause')->nullable();
            $table->string('solution')->nullable();
            $table->text('note');
            $table->string('status');
            $table->string('file_1')->nullable();
            $table->string('file_2')->nullable();
            $table->string('file_3')->nullable();
            //$table->string('reporter')->nullable();
           // $table->string('problem_solver')->nullable();
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
        Schema::dropIfExists('troubleshoots');
    }
};
