<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create( Request $request){
        if($request->isMethod('post')){
            $this->validateForm($request);
            $file = $request->file('image');
            $destination = 'uploads';
            if($file->move($destination,$file->getClientOriginalName())){

            $data = [
                'name'=>$request->get('name'),
                'description'=>$request->get('description'),
                'category'=>$request->get('category'),
                'image'=> $file->getClientOriginalName(),
                'price'=>$request->get('price'),

             ];
             $result = (new Product())->createFood($data);
                if($result){
                    return redirect()->to('/product/view')->with('message','Product created successfully');
                }else{
                    return redirect()->to('/product/create')->with('message','error occurred');
                }
            }
        }
        return view('product.create');
        }

        public function view(){
                $products = (new Product)->simplePaginate(5);
                return view('product.view',['products'=>$products]);
            }

        public function update($id ,Request $request){
            if($request->isMethod('post')){
                $name = $request->get('name');
                $description = $request->get('description');
                $category = $request->get('category');
                $price = $request->get('price');
                $oldimage = $request->get('oldimage');
                $file = $request->file('image');

                if($file == []){
                    $image = $oldimage;
                }else{
                    $destination = 'uploads';
                    $file->move($destination,$file->getClientOriginalName());
                    $image = $file->getClientOriginalName();
                }

                $result = (new Product())::where('id',$id)->update(['name'=>$name,'image' => $image,'description' => $description,'category' => $category,'price' => $price]);
                if($result){
                    return redirect()->to('/product/view')->with('message','Product updated successfully');
                }else{
                    return redirect()->to('/product/update')->with('message','error occurred');
                }
            }
            $result = (new Product)::where('id',$id)->get();
            $food = $result[0]->getOriginal();

            return view('product.update', ['food' => $food,'id' => $id]);
        }



        public function validateForm($request){
            return $this->validate($request,[
                'name' => 'required|string',
                'description' => 'required|min:3|max:500',
            ],[
                'name.required' => 'title is required, Please fill!',
                'description.min' => 'Minimum 3 letters are required',
                'description.max' => 'Maximim 500 letters allowed'
            ]);
        }
        public function delete($id){
            Product::find($id)->delete();
            return redirect()->back();

        }
    }




