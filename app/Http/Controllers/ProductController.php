<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index() {

    }

    public function create() {
        return view("products.create");
        
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        } 
    }

    public function edit() {
        return view("products.edit");
        
    }

    public function update() {
        
    }

    public function delete() {
        
    }
}
