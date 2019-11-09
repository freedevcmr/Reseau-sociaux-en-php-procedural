<?php

require_once '../vendor/autoload.php';
require '../config/database.php';
require '../app/function.php';
$faker = Faker\Factory::create();

// echo $faker->name;
  // 'Lucy Cechtelar';
// echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
// echo $faker->text;

for ($i = 0; $i < 99; $i++) {
    
    $q = $db->prepare('INSERT INTO users(name, pseudo, email,password,active,created_at,city,country,sexe,twitter,github,available_for_hiring,bio) 
    VALUE(:name, :pseudo, :email,:password,:active,:created_at,:city,:country,:sexe,:twitter,:github,:available_for_hiring,:bio)');


     $q->execute(   ['name'=>$faker->name ,
         'pseudo'=>$faker->unique()->userName ,
          'email'=>$faker->unique()->email ,
          'password'=> bcrypt_hasd_password('123456',PASSWORD_BCRYPT) ,
          'active'=> 1,
          'created_at'=> $faker->date().' '.$faker->time(),
          'city'=> $faker->city,
          'country'=>$faker->country ,
          'sexe'=> $faker->randomElement(['H','F']),
          'twitter'=> '',
          'github'=> '',
          'available_for_hiring'=> $faker->randomElement(['0','1']),
          'bio'=> $faker->paragraph()
          ]);
  }

