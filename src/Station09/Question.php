<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];

        /**
         * 'last_name' と 'first_name' を結合した要素を持つ、 'full_name' キーを追加（例: 'full_name' => '山田太郎' )
         * 'age' キーの存在しない要素について、 'age' => null を追加
         * 'password' キーを削除
         */
        foreach ($users as &$user) {
            $user['full_name'] = $user['last_name'] . $user['first_name'];
            if (!isset($user['age'])) {
                $user['age'] = null;
            }
            unset($user['password']);
        }

        return $users;
    }
}
