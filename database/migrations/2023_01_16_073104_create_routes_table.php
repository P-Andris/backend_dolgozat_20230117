<?php

use App\Models\Routes;
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
        Schema::create('routes', function (Blueprint $table) {
            $table->id('route_id');
            $table->date('date');
            // $table->integer('agency_id');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies')->default(0);
            $table->integer('limit');
            $table->tinyInteger('status'); // 0: Törölt, 1: Élő
            $table->timestamps();
        });

        Routes::create(['date' => '2023-01-01', 'agency_id' => 1, 'limit' => 10, 'status' => 1]);
        Routes::create(['date' => '2023-01-03', 'agency_id' => 2, 'limit' => 5, 'status' => 1]);
        Routes::create(['date' => '2023-01-05', 'agency_id' => 1, 'limit' => 8, 'status' => 0]);
        Routes::create(['date' => '2023-01-12', 'agency_id' => 3, 'limit' => 12, 'status' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
