<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product as Model;

class Product extends Controller
{
    public function edit()
    {
        return view('product.edit');
    }

    public function store(Request $request)
    {
        try {
            if (empty($request->file('image')) === false) {
                $file = $request->file('image');
                $fileName = date('Y-m-d') . '-' . Str::random(16) . '.' . $file->getClientOriginalExtension();
                $imagePath = public_path('images/products');
                $file->move($imagePath, $fileName);
            } else {
                $fileName = null;
            }
            $product              = new Model();
            $product->name        = $request['name'];
            $product->price       = $request['price'];
            $product->sku         = $request['sku'];
            $product->image       = $fileName;
            $product->quantity    = $request['quantity'];
            $product->description = $request['description'];
            $product->save();

            return view('admin.index')->with('success', 'Product added successfully!');

        } catch (QueryException $exception) {
            return view('admin.index')->with('warning', $exception->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            if (empty($request['image']) == false) {
                $file = $request->file('image');
                $fileName = date('Y-m-d') . '-' . Str::random(16) . '.' . $file->getClientOriginalExtension();
                $imagePath = public_path('images/products');
                $file->move($imagePath, $fileName);
            } else {
                $fileName = $request['currentImage'];
            }

            Model::where('uuid', $request['uuid'])->update([
                    'name'       => $request['name'],
                    'price'      => $request['price'],
                    'sku'        => $request['sku'],
                    'quantity'   => $request['quantity'],
                    'image'      => $fileName
                ]
            );

            return view('admin.index')->with('success', 'Product updated successfully');
        } catch (QueryException $exception) {
            return view('admin.index')->with('error', $exception->getMessage());
        }
    }
}
