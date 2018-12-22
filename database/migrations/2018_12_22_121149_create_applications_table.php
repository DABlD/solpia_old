<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');

            $table->double('expected_salary', 8, 2);
            $table->string('passport_number');
            $table->date('passport_expiry');
            $table->string('seamans_book_number');
            $table->date('seamans_book_expiry');
            $table->string('us_visa_number');
            $table->date('us_visa_expiry');
            $table->string('schengen_visa_number');
            $table->date('schengen_visa_expiry');

            $table->text('coc_details');
            $table->text('training_certificate_details');
            $table->text('other_info')->nullable();

            $table->boolean('fresh_grad');
            $table->boolean('with_experience');

            $table->text('desired_position');

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
        Schema::dropIfExists('applications');
    }
}
