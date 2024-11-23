<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

    }

    public function create() {
        return view("/products/create");
        
    }

    public function store() {
        
    }

    public function edit() {
        return view("/products/edit");
        
    }

    public function update() {
        
    }

    public function delete() {
        
    }
}
