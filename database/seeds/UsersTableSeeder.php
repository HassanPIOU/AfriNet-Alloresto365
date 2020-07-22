<?php

use App\Customer;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = $faker = Factory::create('fr_FR');
        $date =  $faker->unixTime('now');

        for ($i = 0; $i  < 29 ; ++$i){
            $data = [
                'first_name'  =>  $faker->firstName,
                'last_name' => $faker->lastName,
                'company_name' => $faker->company,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'addresse' => $faker->address,
                'country' => $faker->country,
                'city' => $faker->city,
                'type' => 1,
                'state' => 1,
                'city' => $faker->city,
                'password' => $faker->password,
                'email_verified_at' => date('Y-m-d H:i:s', $date),
                'created_at' => date('Y-m-d H:i:s', $date),
                'updated_at'  => NULL
            ];

            Customer::create($data);

        }


    }
}
