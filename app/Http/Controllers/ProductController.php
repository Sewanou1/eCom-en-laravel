<?php


namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;
class ProductController extends Controller
{
    //
    public function index(){
        $products= Product::all();
        return view('product',compact('products'));
    }

    public function detail($id){
        $product=Product::find($id);
        return view('detail_page',compact('product'));
    }

    public function search(Request $req){
         $data= Product::where('name','like','%'. $req->input('query').'%')->get();
        return view('search',compact('data'));
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect()->route('produit_page');
        }else{
            return redirect()->route('login');
        }

    }

    static function cardItem(){
       $userId= Session::get('user')['id'];
       return Cart::where('user_id',$userId)->count();
    }


}
