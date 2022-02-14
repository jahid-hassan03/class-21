<?php


namespace App\classes;


class Register
{


    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'jahid hassan',
                'email' => 'jahid03@gmail.com',
                'password' => '123456',
                'image' => '1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'jahid',
                'email' => 'jahid@gmail.com',
                'password' => '123456',
                'image' => '2.jpg',
            ],
        ];
    }


}