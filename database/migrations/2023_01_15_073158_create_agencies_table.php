<?php

use App\Models\Agencies;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });

        Agencies::create(['name' => 'Agency 1', 'country' => 'Hungary']);
        Agencies::create(['name' => 'Agency 2', 'country' => 'Japan']);
        Agencies::create(['name' => 'Agency 3', 'country' => 'Spain']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
