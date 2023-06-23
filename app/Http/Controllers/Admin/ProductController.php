<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $list = DB::table('product')->get();
        $product_manage = view('admin.dashboard.product.index')->with('list', $list);
        return view('admin.dashboard.layouts.app')->with('admin.dashboard.product.index', $product_manage);
    }

    public function add()
    {
        return view('admin.dashboard.product.add');
    }

    public function save(Request $request)
    {
        $data = array();
        $data['model'] = $request->input('model');
        $data['categories'] = $request->input('categories');
        $data['price'] = $request->input('price');
        $data['material'] = $request->input('material');
        $data['style'] = $request->input('style');
        $data['size'] = $request->input('size');
        $data['max_load'] = $request->input('max_load');
        $thumbnail = $request->file('thumbnail');
        if ($thumbnail) {
            $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('thumbnails'), $thumbnailName);
            $data['thumbnail'] = $thumbnailName;
        }

        DB::table('product')->insert($data);
        Session::flash('success', 'Product added successfully!');

        return redirect()->route('product.index');
    }

    public function unactive($id)
    {
        DB::table('product')->where('id', $id)->update(['status' => 0]);
        Session::flash('success-update', 'Product updated successfully!');
        return redirect()->route('product.index');
    }

    public function active($id)
    {
        DB::table('product')->where('id', $id)->update(['status' => 1]);
        Session::flash('success-update', 'Product updated successfully!');
        return redirect()->route('product.index');
    }

    public function update($id)
    {
        $update = DB::table('product')->where('id', $id)->get();
        $product_manage = view('admin.dashboard.product.update')->with('list', $update);
        return view('admin.dashboard.layouts.app')->with('admin.dashboard.product.update', $product_manage);
    }

    public function save_update(Request $request, $id)
    {
        $data = array();
        $data['model'] = $request->input('model');
        $data['categories'] = $request->input('categories');
        $data['price'] = $request->input('price');
        $data['material'] = $request->input('material');
        $data['style'] = $request->input('style');
        $data['size'] = $request->input('size');
        $data['max_load'] = $request->input('max_load');

        DB::table('product')->where('id', $id)->update($data);
        Session::flash('success', 'Product updated successfully!');

        return redirect()->route('product.index');
    }

    public function del($id)
    {
        DB::table('product')->where('id', $id)->delete();
        Session::flash('success', 'Product deleted successfully!');

        return redirect()->route('product.index');
    }
}
