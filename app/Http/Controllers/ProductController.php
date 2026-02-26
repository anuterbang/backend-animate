<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Facial Wash', 'price' => 50000],
            ['id' => 2, 'name' => 'Serum Vitamin C', 'price' => 120000],
            ['id' => 3, 'name' => 'Moisturizer', 'price' => 80000],
            ['id' => 4, 'name' => 'Sunscreen', 'price' => 90000],
            ['id' => 5, 'name' => 'Night Cream', 'price' => 150000],
        ];

        return response()->json($products);
    }
}
