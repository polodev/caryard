<?php 

require 'vendor/autoload.php';

require 'create-table.php';
use Carbon\Carbon;
use Faker\Factory;

$users = [
  [
  "name" => 'admin',
  "email" => 'admin@gmail.com'
  ],
];

foreach ($users as $user) {
  User::insert([
    "name" => $user['name'],
    "email" => $user['email'],
    "password" => password_hash('secret', PASSWORD_BCRYPT),
    "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
    "updated_at" => Carbon::now()->format("Y-m-d H:i:s")
  ]);
}

$brands = ['Bently', 'Bugatti', 'Buick'];
foreach ($brands as $brand) {
  Brand::insert([
    'name' => $brand,
    "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
    "updated_at" => Carbon::now()->format("Y-m-d H:i:s")
  ]);
}
$cars = [
  [
    'model' => 'Bently 1',
    'sale_price' => '22000',
    'rent_price' => '3000',
    'code' => 'ben10',
    'capacity' => '3',
    'brand_id' => 1,
  ],
  [
    'model' => 'Bently 2',
    'sale_price' => '11000',
    'rent_price' => '1500',
    'code' => 'ben20',
    'capacity' => '3',
    'brand_id' => 1,
  ],
  [
    'model' => 'Bugatti 1',
    'sale_price' => '14000',
    'rent_price' => '1400',
    'code' => 'bugat10',
    'capacity' => '3',
    'brand_id' => 2,
  ],
  [
    'model' => 'Bugatti 2',
    'sale_price' => '41000',
    'rent_price' => '4000',
    'code' => 'bugat20',
    'capacity' => '3',
    'brand_id' => 2,
  ],
  [
    'model' => 'Buick 1',
    'sale_price' => '31000',
    'rent_price' => '3000',
    'code' => 'buick10',
    'capacity' => '3',
    'brand_id' => 3,
  ],
  [
    'model' => 'Buick 2',
    'sale_price' => '21000',
    'rent_price' => '2000',
    'code' => 'buick20',
    'capacity' => '3',
    'brand_id' => 3,
  ],

];

foreach ($cars as $car) {
  Car::insert([
    'model' =>  $car['model'],
    'sale_price' =>  $car['sale_price'],
    'rent_price' =>  $car['rent_price'],
    'code' =>  $car['code'],
    'capacity' =>  $car['capacity'],
    'brand_id' => $car['brand_id'],
    "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
    "updated_at" => Carbon::now()->format("Y-m-d H:i:s")
  ]);
}

$visitors = [
  [
    'name' => 'Mr A',
    'sale_or_rent' => 'sale',
    'yearly_income' => '25000',
    'mobile' => '0483080234',
    'email' => 'a@gmail.com',
    'car_id' => rand(1, 6),
  ],
  [
    'name' => 'Mr B',
    'sale_or_rent' => 'sale',
    'yearly_income' => '25000',
    'mobile' => '0483080234',
    'email' => 'B@gmail.com',
    'car_id' => rand(1, 6),
  ],
  [
    'name' => 'Mr c',
    'sale_or_rent' => 'rent',
    'yearly_income' => '25000',
    'mobile' => '0483080234',
    'email' => 'c@gmail.com',
    'car_id' => rand(1, 6),
  ],
  [
    'name' => 'Mr D',
    'sale_or_rent' => 'sale',
    'yearly_income' => '25000',
    'mobile' => '0483080234',
    'email' => 'd@gmail.com',
    'car_id' => rand(1, 6),
  ],
  [
    'name' => 'Mr E',
    'sale_or_rent' => 'rent',
    'yearly_income' => '25000',
    'mobile' => '0483080234',
    'email' => 'e@gmail.com',
    'car_id' => rand(1, 6),
  ],
];

foreach ($visitors as $visitor) {
  Visitor::insert([
    'name' =>  $visitor['name'],
    'sale_or_rent' =>  $visitor['sale_or_rent'],
    'yearly_income' =>  rand(100000, 250000),
    'mobile' =>  $visitor['mobile'],
    'email' =>  $visitor['email'],
    'car_id' => $visitor['car_id'],
    "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
    "updated_at" => Carbon::now()->format("Y-m-d H:i:s")
  ]);
}

echo "table created successfully \n";
echo "data seeding successfully";


