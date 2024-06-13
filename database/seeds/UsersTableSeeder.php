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
        DB::table('users')->insert([[
                'over_name' => '山田',
                'under_name' => '太郎',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'タロウ',
                'mail_address' => 'taro.yamada@example.com',
                'sex' => 1, // 1: 男性, 2: 女性
                'birth_day' => '1990-01-01',
                'role' => 1, // 1: 管理者, 2: 教師(数学), 3:教師(英語), 4:生徒
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'over_name' => '鈴木',
                'under_name' => '花子',
                'over_name_kana' => 'スズキ',
                'under_name_kana' => 'ハナコ',
                'mail_address' => 'hanako.suzuki@example.com',
                'sex' => 2, // 1: 男性, 2: 女性
                'birth_day' => '1992-02-02',
                'role' => 2, // 1: 管理者, 2: 教師(数学), 3:教師(英語), 4:生徒
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'over_name' => '山本',
                'under_name' => '瀬里奈',
                'over_name_kana' => 'ヤマモト',
                'under_name_kana' => 'セリナ',
                'mail_address' => 'hanakoko@example.com',
                'sex' => 2, // 1: 男性, 2: 女性
                'birth_day' => '1992-02-02',
                'role' => 3, // 1: 管理者, 2: 教師(数学), 3:教師(英語), 4:生徒
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'over_name' => '中山',
                'under_name' => '一',
                'over_name_kana' => 'ナカヤマ',
                'under_name_kana' => 'ハジメ',
                'mail_address' => 'hajime-nakayama@example.com',
                'sex' => 2, // 1: 男性, 2: 女性
                'birth_day' => '1992-02-02',
                'role' => 4, // 1: 管理者, 2: 教師(数学), 3:教師(英語), 4:生徒
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            // 必要に応じて他のユーザーを追加
        ]);
    }

}
