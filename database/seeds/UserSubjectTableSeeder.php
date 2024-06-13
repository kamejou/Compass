<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subject;

class UserSubjectSeeder extends Seeder
{
    public function run()
    {
        $user1 = User::find(1);
        $user2 = User::find(2);

        $subject1 = Subject::where('subject', '国語')->first();
        $subject2 = Subject::where('subject', '数学')->first();
        $subject3 = Subject::where('subject', '英語')->first();

        // ユーザー1が国語と数学を選択
        $user1->subjects()->attach([$subject1->id, $subject2->id]);

        // ユーザー2が英語を選択
        $user2->subjects()->attach([$subject3->id]);

        // 必要に応じて他のユーザーと科目のリレーションを追加
    }
}
