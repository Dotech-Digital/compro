<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class DeviceController extends Controller
{
    public function __construct()
    {
        $this->menu = "DEVICE";
        $this->url = url('device');
        $this->title = "Device";
        $this->view = "device.";
    }

    public function index()
    {
        $this->authAction('read');
        $this->authCheckDetailAccess();

        $breadcrumbs = [
            ['url' => url('/dashboard'), 'title' => 'Home'],
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

        $group = auth()->user()->group_id;

        $data = Device::with('user');

        if ($group != 1) {
            $data = $data->where('user_id', auth()->user()->user_id);
        }

        $data = $data->get();

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
            'description' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        $data = $request->all();
        $data['user_id'] = auth()->user()->user_id;
        $data['status'] = 'unauthenticated';
        $data['session_key'] = Str::uuid()->toString();

        $news = Device::create($data);

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

        $data = Device::find($id);

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
            'description' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        $news = Device::where('device_id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'phone_number' => $request->phone_number
        ]);

        if ($news) {
            return $this->setResponse(true, $this->updateSuccessMessage);
        } else {
            return $this->setResponse(false, $this->updateFailedMessage);
        }
    }

    function addSession($sessionId)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://wa-dotech.vercel.app/sessions/add', [
            'sessionId' => $sessionId,
        ]);

        return $response->json();
    }

    public function show($session_key)
    {
        $breadcrumbs = [
            ['url' => url('/dashboard'), 'title' => 'Home'],
            ["url" => "#", "title" => "Master"],
            ['url' => $this->url, 'title' => $this->title],
            ['url' => '#', 'title' => 'Detail'],
        ];

        $device = Device::where('session_key', $session_key)->first();

        $data = [
            "Device ID" => $device->session_key ?? "-",
            "Device Name" => $device->name ?? "-",
            "Phone Number" => $device->phone_number ?? "-",
            "Description" => $device->description ?? "-",
        ];

        $sessionId = $device->session_key;
        $response = $this->addSession($sessionId);

        return view($this->view . 'detail')->with('title', $this->title)
            ->with('url', $this->url)
            ->with('title', 'Detail ' . $this->title)
            ->with('breadcrumbs', $breadcrumbs)
            ->with('device', $device)
            ->with('data', $data)
            ->with('qr', $response);
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
