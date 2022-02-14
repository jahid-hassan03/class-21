<?php


namespace App\classes;


class Product
{
    protected $product =[];
    public function getALLProduct()
    {
        return[
            0=>[
                'id'            => '1',
                'name'          => 'Shirt',
                'category'      => 'men Fashion',
                'brand'         => 'easy brand',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'shirt5.jpg'
            ],
            1=>[
                'id'            => '2',
                'name'          => 'shirt',
                'category'      => 'men Fashion',
                'brand'         => 'easy brand',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'shirt4.jpg'
            ],
            2=>[
                'id'            => '3',
                'name'          => 'shirt',
                'category'      => 'men Fashion',
                'brand'         => 'easy brand',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'shirt3.jpg'
            ],

            3=>[
                'id'            => '4',
                'name'          => 'Shirt',
                'category'      => 'men Fashion',
                'brand'         => 'easy brand',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'shirt2.jpg'
            ],

            4=>[
                'id'            => '5',
                'name'          => 'Shirt',
                'category'      => 'men Fashion',
                'brand'         => 'easy brand',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'shirt.jpg'
            ],

            5=>[
                'id'            => '6',
                'name'          => 'shampoo',
                'category'      => 'men fashion',
                'brand'         => 'unilever',
                'price'         => '3000',
                'description'   => '',
                'image'         => 'd1.jpg'
            ],


        ];
    }
    public function getProductById($id)
    {
        $this->Products=$this->getALLProduct();
        foreach ($this->Products as $product)
        {
        if ($product ['id']  == $id)
        {
            return $product;
        }
        }

    }
}