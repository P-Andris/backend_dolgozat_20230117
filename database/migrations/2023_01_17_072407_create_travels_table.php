<?php

use App\Models\Travels;
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
        Schema::create('travels', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('route_id')->references('route_id')->on('routes');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->integer('status');
            $table->tinyInteger('type'); // 0: Normal, 1: VIP
            $table->primary(['route_id', 'user_id']);
            $table->timestamps();
        });

        Travels::create(['route_id' => 1, 'user_id' => 1, 'status' => 1, 'type' => 0]);
        Travels::create(['route_id' => 2, 'user_id' => 3, 'status' => 0, 'type' => 0]);
        Travels::create(['route_id' => 3, 'user_id' => 1, 'status' => 2, 'type' => 1]);
        Travels::create(['route_id' => 3, 'user_id' => 2, 'status' => 0, 'type' => 0]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};
