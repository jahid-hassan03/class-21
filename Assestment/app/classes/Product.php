<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

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
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}