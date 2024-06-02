<?php
namespace App\Http\Controllers;
 
use App\Models\Product;
use App\Http\Controllers;
use Illuminate\Http\Request;

use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller

{

   public function index() {
       return view ('product.products');
   }

    public function logIn() {

    $product = Product::all();
    return view ('components.welcome');
   
   }

    public function logView() {
    return view ('components.welcome'); 
   
  }


    public function create() {
        return view ('components.create');
       
   }


   public function newProduct(Request $request ,Product $product) {

      $product = new Product($request->all());
      $product->save();
      return view ('components.create');
   }


   public function edit($id) {

       $product = Product::find($id);
       return view ('components.edit',['product'=>$product]);  

   }

   public function update(Request $request ,Product $product) {

      $product->fill($request->all());
      $product->save();
      return redirect(route('product'));

   }
 

   public function Show() {

   $product = product::all();
   return view ('components.list',['product'=>$product
 
   ]);

   }

/**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return JsonResponse
     */


     public function destroy(Product $product): JsonResponse
     {
         try {
             $product->delete();
             Session::flash('status', __('shop.product.status.delete.success'));
             return response()->json([
                 'status' => 'success'
             ]);
         } catch (Exception $e) {
             return response()->json([
                 'status' => 'error',
                 'message' => 'Wystąpił błąd!'
             ])->setStatusCode(500);
         }
     }
}
