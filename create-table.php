<?php
/**
 * Brand
 * Visitor
 * Car
 */


/*
Post.php
posts 
  title 
  content 
  user_id
  category_id
User.php
users 
  name 
  email
  password
Category.php
categories 
  name
Comment.php
comments
  name 
  email
  text 
  post_id
*/

require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager;

Manager::schema()->dropIfExists('brands');
Manager::schema()->dropIfExists('cars');
Manager::schema()->dropIfExists('visitors');
Manager::schema()->dropIfExists('users');

Manager::schema()->create('users', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('email')->unique();
  $t->string('role')->default('visitor');
  $t->string('password');
  $t->timestamps();
});

Manager::schema()->create('brands', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->timestamps();
});

Manager::schema()->create('cars', function ($t) {
  $t->increments('id');
  $t->string('model');
  $t->string('sale_price')->nullable();
  $t->string('rent_price')->nullable();
  $t->string('code')->nullable();
  $t->string('fuel_type')->nullable();
  $t->string('capacity')->nullable();
  $t->text('content')->nullable();
  $t->integer('brand_id')->unsigned();
  // $t->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
  $t->timestamps();
});


Manager::schema()->create('visitors', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('sale_or_rent')->default('sale');
  $t->string('yearly_income');
  $t->string('mobile')->nullable();
  $t->string('email')->nullable();
  $t->integer('car_id')->unsigned();
  // $t->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
  $t->timestamps();
});


















