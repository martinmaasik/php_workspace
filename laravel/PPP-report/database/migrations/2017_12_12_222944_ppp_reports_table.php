<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PPPReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PPP_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('period');
            $table->date('period_start');
            $table->date('period_end');
            $table->integer('emails')->nullable();
            $table->integer('calls')->nullable();
            $table->integer('demos')->nullable();
            $table->integer('trials')->nullable();
            $table->integer('deals')->nullable();
            $table->text('notes')->nullable();
            $table->text('problems')->nullable();
            $table->rememberToken();
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
         Schema::dropIfExists('PPP_reports');
     }
}
