<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->menu = "PRODUCT.PRODUCT";
        $this->url = url('product/product');
        $this->title = "Product";
        $this->view = "product.product.";
    }

    public function index()
    {
        $this->authAction('read', 'redirect');
        $this->authCheckDetailAccess();

        $breadcrumbs = [
            ['url' => url('/dashboard'), 'title' => 'Home'],
            ["url" => "#", "title" => "Product"],
            ['url' => $this->url, 'title' => $this->title],
        ];

        return view($this->view . 'index')->with('title', $this->title)
            ->with('url', $this->url)
            ->with('breadcrumbs', $breadcrumbs)
            ->with('allowAccess', $this->authAccess());
    }

    public function list()
    {
        $this->authAction('read');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $data = Product::with('category')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    public function create()
    {
        $this->authAction('create');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $categories = Category::all();

        return view($this->view . 'action')
            ->with('title', 'Add ' . $this->title)
            ->with('url', $this->url)
            ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $this->authAction('create');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/img/product');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $news = Product::create($data);

        if ($news) {
            return $this->setResponse(true, $this->saveSuccessMessage);
        } else {
            return $this->setResponse(false, $this->saveFailedMessage);
        }
    }

    public function edit($id)
    {
        $this->authAction('update');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $data = Product::find($id);
        $categories = Category::all();

        return view($this->view . 'action')
            ->with('url', $this->url . '/' . $id)
            ->with('title', 'Edit ' . $this->title)
            ->with('id', $id)
            ->with('data', $data)
            ->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $this->authAction('update');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'is_active' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        if ($request->hasFile('image')) {
            //remove first image
            $old = Product::find($id);
            if ($old->image) {
                $file = public_path('assets/img/product/' . $old->image);
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/img/product');
            $image->move($destinationPath, $name);
            $image = $name;
        } else {
            $image = Product::find($id)->image;
        }

        $news = Product::where('product_id', $id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'is_active' => $request->is_active,
        ]);

        if ($news) {
            return $this->setResponse(true, $this->updateSuccessMessage);
        } else {
            return $this->setResponse(false, $this->updateFailedMessage);
        }
    }

    public function show($id)
    {
    }

    public function confirm($id)
    {
        $this->authAction('delete');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $data = Product::with('category')->where($id)->first();

        return (!$data) ? $this->showError("No data found with id: $id") :
            view('layouts.modal_delete')
            ->with('url', $this->url . '/' . $id)
            ->with('title', 'Delete ' . $this->title)
            ->with('id', $id)
            ->with('data', $data)
            ->with('action', 'delete')
            ->with('info', ["Name" => "$data->name", "Category" => "$data->category->name", "Price" => "$data->price"]);
    }

    public function destroy($id)
    {
        $this->authAction('delete');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $res = Product::destroy($id);

        return (!$res) ? $this->showError("No data found with id: $id") :
            $this->setResponse(true, $this->deleteSuccessMessage, $res);
    }
}
