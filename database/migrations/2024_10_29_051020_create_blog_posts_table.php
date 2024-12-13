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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('Post_Title');
            $table->text('Post_Content');
            $table->string('create_by');
            $table->integer('Category_Id');
            $table->boolean('Status')->default(1);
            $table->boolean('Feature')->default(false);
            $table->boolean('Tranding')->default(false);
            $table->string('Post_Image')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
};
