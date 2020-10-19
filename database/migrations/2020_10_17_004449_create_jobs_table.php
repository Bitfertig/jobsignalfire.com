<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->timestamp('date_posted')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('valid_through');
            $table->string('organisation_name', 255);
            $table->string('organisation_url', 255);
            $table->string('employment_type', 255);
            $table->string('location_street', 255);
            $table->string('location_postal_code', 255);
            $table->string('location_locality', 255);
            $table->string('location_country', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}