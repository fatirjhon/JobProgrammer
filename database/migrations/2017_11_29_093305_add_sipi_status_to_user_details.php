<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSipiStatusToUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('sipi_status')->default('Belum dibaca')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn('sipi_status');
        });
    }
}
