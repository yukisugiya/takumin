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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('company');
            $table->string('frame_size')->nullable();
            $table->string('advertising_level')->nullable();
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->string('title');
            $table->string('indeed_title');
            $table->text('job_description');
            $table->text('appeal_point');
            $table->unsignedBigInteger('prefecture_id');
            $table->string('city');
            $table->string('address');
            $table->unsignedBigInteger('employment_status');
            $table->text('nearest_station');
            $table->text('certification');
            $table->text('work_time');
            $table->text('salary_detail');
            $table->unsignedBigInteger('salary_type');
            $table->integer('salary1');
            $table->integer('salary2')->nullable();
            $table->integer('salary3')->nullable();
            $table->text('income_example');
            $table->text('holiday');
            $table->text('welfare');
            $table->text('other')->nullable();
            $table->text('memo')->nullable();
            $table->string('sales_staff')->nullable();
            $table->string('top_image');
            $table->string('registration_image');
            $table->unsignedBigInteger('recruitment_status')->nullable();
            $table->unsignedBigInteger('public_status')->nullable();
            $table->string('changer')->nullable();
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
};
