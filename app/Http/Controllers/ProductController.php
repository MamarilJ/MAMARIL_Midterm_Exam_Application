<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
$gadgets = [
[
'name' => 'Smartphone',
'brand' => 'Samsung',
'price' => 799.99,
],
[
'name' => 'Laptop',
'brand' => 'Apple',
'price' => 1299.99,
],
[
'name' => 'Tablet',
'brand' => 'Microsoft',
'price' => 599.99,
],
[
'name' => 'Smartwatch',
'brand' => 'Fitbit',
'price' => 199.99,
],
[
'name' => 'Camera',
'brand' => 'Canon',
'price' => 599.99,
],
];

return response()->json($gadgets);
}
}

