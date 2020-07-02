<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class CreateUserTest extends TestCase
{
    // use RefreshDatabase;  //メソッドの完了後にデータベースを初期化する

    public function setUp(): void  //テストを行う前にデータベースにシーダーを使ってレコードを作成する
    {
        parent::setUp();
        $this->seed('UsersTableSeeder');
    }

    /**
     * @test
     */
    public function should__作成したユーザーがデータベースに保存されているか確認()
    {
        $this->assertCount(10, User::all());  //ユーザークラスのオブジェクトを全て取得し件数が10件あるか確認
    }
}
