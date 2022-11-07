<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('record_code'); // public use
            $table->text('profile_image')->nullable();
            $table->string('website')->nullable();
            $table->longText('bio');
            $table->longText('description');
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();

            $table->unsignedBigInteger('created_by');

            $table->foreign('created_by')
                ->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('record_code');
            $table->string('title');
            $table->unsignedBigInteger('organizer_id')->nullable();
            $table->string('type');
            $table->string('category');
            $table->text('tags');
            $table->string('location_type'); // Venue, Online-event, to-be-announced
            $table->string('venue_address')->nullable();

            $table->string('event_timing_type'); // Single Event | Recurring Event
            $table->string('start_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_date')->nullable();
            $table->string('end_time')->nullable();

            $table->integer('display_start_time')->default(1);
            $table->integer('display_end_time')->default(1);

            $table->unsignedBigInteger('created_by');

            $table->integer('published')->default(0);
            $table->string('status')->default('Drafted'); // Drafted -> Published -> Live -> Cancelled -> Completed -> Closed

            $table->foreign('organizer_id')
                ->references('id')->on('organizers');

            $table->foreign('created_by')
                ->references('id')->on('users');
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
        Schema::dropIfExists('organizers');
        Schema::dropIfExists('events');
    }
}
