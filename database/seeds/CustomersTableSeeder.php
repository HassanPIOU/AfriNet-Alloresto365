<?php

use App\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
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

        for ($i = 0; $i  < 29 ; ++$i){
            $date =  $faker->unixTime('now');
            $data[] = [
                'first_name'  =>  $faker->firstName,
                'last_name' => $faker->lastName,
                'company_name' => $faker->company,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'addresse' => $faker->address,
                'country' => $faker->country,
                'city' => $faker->city,
                'type' => $faker->numberBetween([1,2]),
                'state' => $faker->numberBetween([1,2]),
                'city' => $faker->city,
                'password' => $faker->password,
                'email_verified_at' => $faker->time(date('Y-m-d H:i:s', $date)),
                'created_at' => date('Y-m-d H:i:s', $date),
                'updated_at'  => date('Y-m-d H:i:s' , $date)
            ];
        }

        Customer::create($data);
    }
}
