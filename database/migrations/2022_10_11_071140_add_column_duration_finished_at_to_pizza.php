<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDurationFinishedAtToPizza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pizza', function (Blueprint $table) {
            $table->integer('duration');
            $table->timestamp('finished_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('pizza', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('finished_at');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
