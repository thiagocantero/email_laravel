<?php
    
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Thiago Cantero",
                "email" => "thiagocantero@gmail.com",
                "password" => bcrypt("123456"),
                "nascdata" => "2001-06-24"
            ],
            [
                "name" => "Thiago Cantero",
                "email" => "thiagolaravel@gmail.com",
                "password" => bcrypt("123456"),
                "nascdata" => "2001-06-24"
            ]
            
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}