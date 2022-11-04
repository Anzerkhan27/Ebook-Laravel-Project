<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        User::factory(20)->create()->each(function($user){

            Book::factory(rand(1,4))->create([
  
               'user_id' => $user->id
  
            ]);
  
          });
    }
}
