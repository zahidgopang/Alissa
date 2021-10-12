<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Productimages;
use Illuminate\Http\Request;
use File;

class Products extends Controller
{
    //
    public function index()
    {
        $products = Product::with('Productimages')->get();
        return view('Admin/All-Products' , compact('products'));
    }
    public function allproducts()
    {
        $sideproducts = Product::with('Productimages')->limit('5')->get();
        $products = Product::with('Productimages')->get();
        return view('products/products',compact('products','sideproducts'));

    }
    public function productsbycat($id)
    {
        $sideproducts = Product::with('Productimages')->limit('5')->get();

        $products = Product::whereCat_id($id)->with('Productimages')->get();
        return view('products/products',compact('products','sideproducts'));

    }
    public function productsbysub($id)
    {
        $sideproducts = Product::with('Productimages')->limit('5')->get();
        $products = Product::whereSubcat_id($id)->with('Productimages')->get();
        return view('products/products',compact('products','sideproducts'));

    }
    public function productsdetail($id)
    {
        $sideproducts = Product::with('Productimages')->limit('5')->get();
        $product = Product::whereId($id)->with('Productimages')->firstorfail();
        return view('products/pro_details',compact('product','sideproducts'));

    }
    public function store(Request $request)
    {

        $pro = new Product();
        $pro->name = $request->pname ;
        $pro->cat_id = $request->cat_id;
        $pro->subcat_id = $request->subcat_id ;
        $pro->detail = $request->pdetail ;
        $pro->item_no = $request->pitem ;
        $pro->unit = $request->unit ;
        $pro->moq = $request->moq ;
        $pro->price = $request->price ;
        $pro->packing = $request->packing ;
        $pro->color = $request->color ;
        $pro->pro_size = $request->prosize ;
        $pro->pack_size = $request->packsize ;
        $pro->package = $request->package ;
        $pro->material = $request->material ;
        $pro->video = $request->video ;
        $pro->save();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name= time().$file->getClientOriginalName();
                $file->move('productimages',$name);
                $proimg = new Productimages();
                $proimg->image = $name;
                $proimg->product_id = $pro->id;
                $proimg->save();
            }
        }
        return redirect('Admin/Add-Products');
     
        
    }
    public function Edit($id)
    {
        $products = Product::with('Productimages')->find($id);
        return view('Admin/Edit-Product' , compact('products'));
    }
    public function update(Request $request)
    {
        $pro = Product::find($request->id);
        $pro->name = $request->pname ;
        $pro->cat_id = $request->cat_id;
        $pro->subcat_id = $request->subcat_id ;
        $pro->detail = $request->pdetail ;
        $pro->item_no = $request->pitem ;
        $pro->unit = $request->unit ;
        $pro->moq = $request->moq ;
        $pro->price = $request->price ;
        $pro->packing = $request->packing ;
        $pro->color = $request->color ;
        $pro->pro_size = $request->prosize ;
        $pro->pack_size = $request->packsize ;
        $pro->package = $request->package ;
        $pro->material = $request->material ;
        $pro->video = $request->video ;
        $pro->save();

        if($files=$request->file('images')){
            foreach($files as $file){
                $name= time().$file->getClientOriginalName();
                $file->move('productimages',$name);
                $proimg = new Productimages();
                $proimg->image = $name;
                $proimg->product_id = $pro->id;
                $proimg->save();
            }
        }
        return redirect('Admin/All-Products');
    }
    public function DeleteImage($id)
    {

        $proimg = Productimages::find($id); 
        $image_path = "productimages/$proimg->image";
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $proimg->delete();
        return redirect()->back();
    }
    public function Delete($id)
    {

        $pro = Product::with('Productimages')->find($id); 
        $pro->productimages()->delete();
        $pro->delete();
        return redirect()->back();
    }
}
