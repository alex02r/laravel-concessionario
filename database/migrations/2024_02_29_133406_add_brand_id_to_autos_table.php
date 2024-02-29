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
        Schema::table('autos', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->nullable()->after('id');

            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->dropForeign('autos_brand_id_foreign');
            $table->dropColumn('brand_id');
        });
    }
};
