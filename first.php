<?php



    public function index(){
    
        $productShow = Product::all();
        $categories = Category::all();
        
        //return view('front.home', compact('categories'));
        

        return view('front.home',['categories' => $categories]);
    }


 