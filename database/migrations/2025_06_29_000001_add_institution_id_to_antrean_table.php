<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('antreans', function (Blueprint $table) {
            if (!Schema::hasColumn('antreans', 'institution_id')) {
                $table->unsignedBigInteger('institution_id')->after('id_service');
                $table->foreign('institution_id')->references('id')->on('institutions');
            }
        });
    }

    public function down()
    {
        Schema::table('antreans', function (Blueprint $table) {
            $table->dropForeign(['institution_id']);
            $table->dropColumn('institution_id');
        });
    }
};
