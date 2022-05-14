<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('follow_twitter_heading')->nullable();
            $table->longText('twitter_embeded_code')->nullable();
            $table->string('follow_us_heading')->nullable();
            $table->string('newsletter_heading')->nullable();
            $table->string('newsletter_description')->nullable();
            $table->string('popular_post_heading')->nullable();
            $table->string('category_heading')->nullable();
            $table->string('tag_heading')->nullable();
            $table->string('recent_post_heading')->nullable();
            $table->string('instagram_heading')->nullable();
            $table->string('footer_category_heading')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_number')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_site_name')->nullable();
            $table->string('blog_banner_heading')->nullable();
            $table->string('blog_banner_description')->nullable();
            $table->string('blog_banner_bg')->nullable();
            $table->string('about_banner_heading')->nullable();
            $table->string('about_banner_title')->nullable();
            $table->string('about_banner_bg')->nullable();
            $table->string('about_thumbnail')->nullable();
            $table->longText('about_detail')->nullable();
            $table->string('photo_taken_text')->nullable();
            $table->string('photo_taken_count')->nullable();
            $table->string('artical_post_text')->nullable();
            $table->string('artical_post_count')->nullable();
            $table->string('active_reader_text')->nullable();
            $table->string('active_reader_count')->nullable();
            $table->string('follower_text')->nullable();
            $table->string('follower_count')->nullable();
            $table->string('story_heading')->nullable();
            $table->longText('story_detail')->nullable();
            $table->string('author_heading')->nullable();
            $table->string('author_detail')->nullable();
            $table->string('featured_heading')->nullable();
            $table->string('project_banner_title')->nullable();
            $table->string('project_banner_bg')->nullable();
            $table->string('project_heading')->nullable();
            $table->string('project_description')->nullable();
            $table->string('count_bg')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
