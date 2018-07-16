<?php


class ExampleTest extends FeatureTestCase
{

    public function test_Basic_Example()
    {

        //$this->assertTrue(false);

        $user = factory(\App\User::class)->create();

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see($user->name);
    }
}
