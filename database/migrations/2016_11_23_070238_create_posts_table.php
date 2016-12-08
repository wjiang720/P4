<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way
            $table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            # The rest of the fields...
            $table->string('category');
            $table->string('location');
            $table->integer('lost_or_found');
            $table->integer('lost_user')->nullable();
            $table->string('lost_email')->nullable();
            $table->string('lost_phone')->nullable();
            $table->integer('found_user')->nullable();
            $table->string('found_email')->nullable();
            $table->string('found_phone')->nullable();
            $table->string('discription');
            $table->integer('claimed');

            # FYI: We're skipping the 'tags' field for now; more on that later.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
        //
    }
}
