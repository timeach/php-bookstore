<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("book_isbn")->nullable();
            $table->string("book_title", 255)->nullable();
            $table->string("book_author", 255)->nullable();
            $table->string("book_image", 255)->nullable();
            $table->text("book_descr")->nullable();
            $table->decimal("book_price", 6, 2);
            $table->unsignedInteger("supplier_id");
            $table->foreign("supplier_id")->references("id")->on("suppliers");
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
        Schema::dropIfExists('books');
    }
}
