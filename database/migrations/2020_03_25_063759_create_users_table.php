<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('user_name',100)->unique();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('phone',25)->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('image',100)->nullable();
            $table->text('bio')->nullable();
            $table->boolean('is_Admin')->default(0);
            $table->string('admin_auth')->nullable();
            
            
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
        
            //testing
            $table->string('access_token',100)->nullable();
            $table->string('social_token',100)->nullable();
            //end
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
