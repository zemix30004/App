<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        // $this->assertEquals(200, $response->status());//1 способ вывод данных на главную страницу
        $response->assertOk(); //2 способ
    }
    public function testAuthorize()
    {
        $this->post('/login', [
            'email' => 'eu@gmail.com',
            'password' => '1234qwer',
        ]);
        $response = $this->get('admin/test'); //тест авторизации
        $response->assertOk();
    }
    public function testFailedEmailAuth()
    {
        $this->post('/login', [
            'email' => 'eu@gmail.com',
            'password' => '1234qwer',
        ]);
        $response = $this->get('admin/test');  //Ошибка неправильности заполнения электронной почты
        // dd($response->status());
        $response->assertUnauthorized();
    }

    public function testFailedPasswordAuth()
    {
        $this->post('/login', [
            'email' => 'eu@gmail.com',
            'password' => '1234qwer',
        ]);
        $response = $this->get('admin/test');  //Ошибка неправильности заполнения пароля
        // dd($response->status());
        $response->assertUnauthorized();
    }
    public function testFileRoleUser()
    {
    }
}
