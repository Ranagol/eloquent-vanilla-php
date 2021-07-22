<?php  

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;//in other tutorials this is called Capsule, with as Capsule...

Manager::schema()->dropIfExists('departments');//...so here instead of the Manager we would have Capsule
Manager::schema()->create('departments', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->timestamps();
});


Manager::schema()->dropIfExists('subjects');
Manager::schema()->create('subjects', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->integer('department_id')->unsigned();//foreign key...?
  $table->timestamps();
});