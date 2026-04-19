<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**class Ecommerce extends Controller
{
    public function List_Car()
    {
        $mycar = ["BMW", "Toyota", "Ford"];

        return view('cars', compact('mycar'));
    }
}

**/
class Ecommerce extends Controller
{
    public function List_Car()
    {
        $mycar = [
            [
                "name" => "Camry",
                "number" => "101",
                "price" => "120000",
                "brand" => "Toyota",
                "status" => "New",
                "image" => "https://via.placeholder.com/100"
            ],
            [
                "name" => "BMW X5",
                "number" => "102",
                "price" => "300000",
                "brand" => "BMW",
                "status" => "Used",
                "image" => "https://via.placeholder.com/100"
            ]
        ];

        return view('cars', compact('mycar'));
    }
}
