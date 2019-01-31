<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;
use App\Products; 

class ProductsController extends Controller
{
	public function index()
    { 
    	$prods = Products::all();        
    	return ProductsResource::collection($prods); 
    }

    public function show($id)
    {        
        $prods = Products::findOrfail($id);         
        return new ProductsResource($prods);
    } 

    public function store(Request $request)
    {
        $prods = new Products;        
            
        $prods->nev = $request->input('nev');
        $prods->tipus = $request->input('tipus');
        $prods->ar = $request->input('ar');
 
        if($prods->save()) {
            return new ProductsResource($prods);
        } 
    }

    // postman: form-urlencoded
    public function update(Request $request, $id)
    {
        $prods = Products::findOrFail($id);   

        //$prods->update($request->all());   
        //return new ProductsResource($prods); 
        $prods->nev = $request->input('nev');
        $prods->tipus = $request->input('tipus');
        $prods->ar = $request->input('ar');
 
        if($prods->save()) {
            return new ProductsResource($prods);
        } 
    }

    public function destroy($id)
    {
        //Get the task
        $prods = Products::findOrfail($id);
 
        if($prods->delete()) {
            return new ProductsResource($prods);
        } 
    }  
}
