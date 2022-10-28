<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class productController extends Controller {

  public function search(Request $request) {
    $word = $request->input('word');
    if(!isset($word)) {
      return view('dashboard');
    }

    $products = Products::where('name','like',"$word")->get();

    if($products->count() > 0)
    return view("dashboard", ['products' => $products]);
    else
      $msg = "Sorry!!! there're no such product in our store";
      return view('dashboard',['msg' => $msg]);

  }

   public function create(Request $request) {
     if(!empty($request->input('name'))){
        Products::create(array(
        'name' => $request->input('name'),
        'desc' => $request->input('description'),
        'price' => $request->input('price')
      ));
     }
    // echo $request->input('description');

     $msg = "Successfull Adding Product (^-^)";
    return view("dashboard", ['msg' => $msg]);
  }

}
?>
