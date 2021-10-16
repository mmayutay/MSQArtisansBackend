<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOrderTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_order_trackers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('artisan_id')->nullable()->constrained('artisan_users');
            $table->foreignId('job_orders_id')->nullable()->constrained('job_orders');
            $table->string('jo_type');
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
        Schema::dropIfExists('job_order_trackers');
    }
}
