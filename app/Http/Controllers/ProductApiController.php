<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        // generate a list of products with a title, description, image and a price for a online fashion store
        $products = array(
            array(
                'title' => 'Women\'s Black Blazer',
                'description' => 'A sleek and stylish blazer for women, perfect for dressing up any outfit.',
                'image' => 'https://example.com/images/womens-black-blazer.jpg',
                'price' => 89.99
            ),
            array(
                'title' => 'Men\'s Leather Jacket',
                'description' => 'A classic leather jacket for men, made from high-quality leather and built to last.',
                'image' => 'https://example.com/images/mens-leather-jacket.jpg',
                'price' => 199.99
            ),
            array(
                'title' => 'Women\'s Floral Dress',
                'description' => 'A beautiful floral dress for women, perfect for spring and summer occasions.',
                'image' => 'https://example.com/images/womens-floral-dress.jpg',
                'price' => 59.99
            ),
            array(
                'title' => 'Men\'s Slim-Fit Shirt',
                'description' => 'A stylish and comfortable shirt for men, with a slim fit and high-quality materials.',
                'image' => 'https://example.com/images/mens-slim-fit-shirt.jpg',
                'price' => 39.99
            ),
        );

        return response()->json([
            'products' => $products,
            'status' => true
        ]);
    }
}
