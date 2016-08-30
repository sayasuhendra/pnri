<?php namespace Suhendra\Berita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSuhendraBeritaPosts extends Migration
{
    public function up()
    {
        Schema::create('suhendra_berita_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('judul', 255);
            $table->string('slug', 255);
            $table->text('isi');
            $table->string('gambar', 255)->nullable();
            $table->string('keyword', 255)->nullable();
            $table->string('deskripsi', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('suhendra_berita_posts');
    }
}
