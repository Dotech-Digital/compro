<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->menu = "PRODUCT.CATEGORY";
        $this->url = url('product/category');
        $this->title = "Category";
        $this->view = "product.category.";
    }

    public function index()
    {
        $this->authAction('read');
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

        $data = Category::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    public function create()
    {
        $this->authAction('create');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        return view($this->view . 'action')
            ->with('title', 'Add ' . $this->title)
            ->with('url', $this->url);
    }

    public function store(Request $request)
    {
        $this->authAction('create');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
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

        $news = Category::create($data);

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

        $data = Category::find($id);

        return view($this->view . 'action')
            ->with('url', $this->url . '/' . $id)
            ->with('title', 'Edit ' . $this->title)
            ->with('id', $id)
            ->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $this->authAction('update');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        $slug = Str::slug($request->name);

        $news = Category::where('category_id', $id)->update([
            'name' => $request->name,
            'slug' => $slug
        ]);

        if ($news) {
            return $this->setResponse(true, $this->updateSuccessMessage);
        } else {
            return $this->setResponse(false, $this->updateFailedMessage);
        }
    }

    public function show($id)
    {
        $breadcrumbs = [
            ['url' => url('/dashboard'), 'title' => 'Home'],
            ["url" => "#", "title" => "Master"],
            ['url' => $this->url, 'title' => $this->title],
            ['url' => '#', 'title' => 'Detail'],
        ];

        $data = Category::findOrFail($id);

        $data = [
            "Slug" => $data->slug ?? "-",
            "Name" => $data->name ?? "-",
        ];

        return view($this->view . 'detail')->with('title', $this->title)
            ->with('url', $this->url)
            ->with('title', 'Detail ' . $this->title)
            ->with('breadcrumbs', $breadcrumbs)
            ->with('data', $data);
    }

    public function confirm($id)
    {
        $this->authAction('delete');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $data = Category::find($id);

        return (!$data) ? $this->showError("No data found with id: $id") :
            view('layouts.modal_delete')
            ->with('url', $this->url . '/' . $id)
            ->with('title', 'Delete ' . $this->title)
            ->with('id', $id)
            ->with('data', $data)
            ->with('action', 'delete')
            ->with('info', ["Name" => "$data->name"]);
    }

    public function destroy($id)
    {
        $this->authAction('delete');
        if ($this->authCheckDetailAccess() !== true) return $this->authCheckDetailAccess();

        $res = Category::destroy($id);

        return (!$res) ? $this->showError("No data found with id: $id") :
            $this->setResponse(true, $this->deleteSuccessMessage, $res);
    }
}
