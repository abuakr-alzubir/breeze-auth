<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;

class searchController extends Controller {

  public function search(Request $request) {
    $word = $request->input('word');
    if(!isset($word)) {
      return view('welcomeform');
    }

    $products = Products::where('name','like',"$word")->get();

    if($products->count() > 0)
    return view("welcomeform", ['products' => $products]);
    else
      $msg = "Sorry!!! there're no such product in our store";
      return view('welcomeform',['msg' => $msg]);

  }

   public function createProduct(Request $request) {
     if(!empty($request->input('name'))){
        Products::create(array(
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'price' => $request->input('price')
      ));
     }

     $msg = "Successfull Adding Product (^-^)";
    return view("welcomeform", ['msg' => $msg]);
  }

}
?>
