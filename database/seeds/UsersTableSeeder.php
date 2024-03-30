<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'over_name' => 'OverName',
            'under_name' => 'UnderName',
            'over_name_kana' => 'OverNameKana',
            'under_name_kana' => 'UnderNameKana',
            'mail_address' => 'User@mailaddress.com',
            'sex' => '0',
            'birth_day' => '2000-01-01',
            'role' => '1',
            'password' => bcrypt('password'),
        ]);
    }
}
