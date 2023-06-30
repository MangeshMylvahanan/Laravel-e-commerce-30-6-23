<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // public function details($id)
    // {
        // $product = Product::find($id);
        // $productImages = $product->product_images; // Retrieve the product images from the database
        // $imageArray = explode("|", $productImages); // Split the string into an array
        // dd($imageArray);

        //    // Loop through the array and generate the HTML to display the images
        // foreach ($imageArray as $image) 
        // {
        //     echo "<img src='thumb img/$image' alt='Product Image'>";
        // }

    //    $product = Product::find($id);
    //    $productImages = $product->product_images;
    //    $productImagesArray = json_decode($productImages, true);

    //    return response()->json($productImagesArray);
    // }
    public function Cart()
    {
        return view('Home.cart');
    }
    public function CheckOut()
    {
        return view('Home.checkout');
    }
    public function AddProduct()
    {
        return view('Admin.productsadd');
    }
    public function home()
    {
        $product = Product::all();
        return view('Home.homepage', ['product' => $product]);
    }
    public function AddProductStore(Request $request)
    {
        // dd($request->all());
        Session::has('user');
        $userId = Session::get('user')['id'];
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_discount = $request->input('product_discount');
        $product->product_discountprice = $request->input('product_discountprice');
        $product->product_description = $request->input('product_description');
        $product->catagory = $request->input('catagory');
        $product->subcatagory = $request->input('subcatagory');
        $product->seller_name = $userId;
        $product->delivery_days = $request->input('delivery_days');
        if($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $request->validate(['product_image'=>'required|image']);
            $extension = $image->getClientOriginalExtension();
            $imagename = time().'.'.$extension;
            $image->move('uploads',$imagename);
            $product->product_image = $imagename;
        }
        $images=array();
        if($files=$request->file('product_images')){
            $i=0;
            foreach($files as $file)
            {
                $name=$file->getClientOriginalName();
                $fileNameExtract=explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];

                $file->move('thumb img',$fileName);
                $images[]=$fileName;
                $i++;
            }
            $product->product_images = implode("|",$images);
            $product->save();
        }


        // $imageUrls = [];

        // foreach ($request->file('product_images') as $image) 
        // {
        //     $path = $image->store('product_images', 'public');
        //     $imageUrls = Storage::disk('public')->url($path);
        // }

        // $product->product_images = json_encode($imageUrls);
        return back() 
        ->withSuccess('you have successfully added the product details! ');
    }
    public function viewshop()
    {
        $products = Product::all();
        return view('Home.shop',['products' => $products]);
    }
    static function details($id)
    {
        $product = Product::find($id);
        return view('Home.product-detail',['products' =>$product]);
    }
    
}
