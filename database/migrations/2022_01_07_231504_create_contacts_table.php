<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->unsigned(); //id:bigint unsigned PRIMARY KEY
            $table->string('fullname'); //->nullable(false)->change(); //fullname:varchar(255)NOT NULL
		    $table->smallInteger('gender')->nullable(false)->default(1)->comment('性別');  //この行を追加; //gender:tinyint NOT NULL(1:男性　2:女性)
		    $table->string('email');//->nullable(false)->change(); //email: varchar(255) NOT NULL
		    $table->string('postcode');//char('postcode', 8);//->nullable(false)->change(); //postcode:char(8) NOT NULL
	        $table->string('address');//->nullable(false)->change(); //address:varchar(255) NOT NULL
	        $table->string('building_name')->nullable(false);//->change(); //building_name:varchar 255
	        $table->text('opinion')->nullable(false);//->change(); //opinion:text NOT NULL
			$table->timestamp('created_at')->useCurrent()->nullable();
			$table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
				Schema::dropIfExists('contacts');
    }
}