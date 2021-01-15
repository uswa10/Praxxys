<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
      public function search(Request $request) {
        $query=request('search_text');
            $products = Product::where('name', 'LIKE', '%' . $query . '%' )->orWhere('category', 'LIKE', '%' . $query . '%')->orWhere('description', 'LIKE', '%' . $query . '%')->simplepaginate(5);
            return view('product/searchproduct',compact('products'));
  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
    'name'=>'required',
      'category'=>'required',
    'description'=>'required',
    'created_at' => 'required'

    ]);



  $products = new product;
  $products->name = $request->input('name');
  $products->category = $request->input('category');
  $products->description = $request->input('description');
  $products->created_at = $request->input('created_at');

  $products->save();

  return redirect('product/showproduct')->with('success','Product Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



    $products = Product::orderBy('created_at', 'DESC')->get();

      return view('product.showproduct', ['products'=>$products]);


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $products = product::find($id);
      return view('product.editproduct')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'name' => 'required',
        'category' => 'required',
        'description'=>'required',
        'created_at' => 'required'

      ]);
        $products = product::find($id);
        $products->name = $request->input('name');
        $products->category = $request->input('category');
        $products->description = $request->input('description');
        $products->created_at = $request->input('created_at');



        $products->save();

        return redirect('/product/showproduct')->with('success','Product Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $products = product::find($id);
      $products->delete();
        return redirect('/product/showproduct')->with('success','Product Deleted.');
    }
}
