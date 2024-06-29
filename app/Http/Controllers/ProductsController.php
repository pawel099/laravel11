<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\productRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('components.welcome');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(productRequest $request ,Product $product)
    {
        $product = new Product($request->all());
      
        if ($request->hasFile('thumbnail')) {
          $product->thumbnail = $request->file('thumbnail')->store('products');
        }
  
        $product->save();
        return redirect('add')->with('message','product created succssfull');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
      return view ('components.create');
    }
        
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = product::paginate(5);
         return view ('components.list',['product'=>$product
         
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view ('components.edit',['product'=>$product]); 
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(productRequest $request ,Product $product) {

        $oldImagePath = $product->thumbnail;
        $product->fill($request->validated());
        
        if ($request->hasFile('thumbnail')) {
            if (Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }
  
            $product->thumbnail = $request->file('thumbnail')->store('products');
        }
        $product->save();
        return redirect()->route('edit', ['id'=>$product->id])
        ->with('message', 'shop.product.status.update.success');
  
     }
     

    /**
     * Remove the specified resource from storage.
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
