<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->menu = "API";
        $this->url = url('api');
        $this->title = "Api";
        $this->view = "api.";
    }

    public function index()
    {
        $this->authAction('read');
        $this->authCheckDetailAccess();

        $breadcrumbs = [
            ['url' => url('/dashboard'), 'title' => 'Home'],
            ['url' => $this->url, 'title' => $this->title],
        ];

        $user = Auth::user();

        return view($this->view . 'index')->with('title', $this->title)
            ->with('url', $this->url)
            ->with('breadcrumbs', $breadcrumbs)
            ->with('user', $user)
            ->with('allowAccess', $this->authAccess());
    }

    public function show($id)
    {
        return view($this->view . 'password')->with('title', $this->title)
            ->with('url', $this->url . '/' . $id)
            ->with('title', 'Confirm Password');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error) {
                $errors[] = $error;
            }
            return $this->setResponse(false, "Validation Error", $errors);
        }

        $user_id = $id;

        $credentials = User::find($user_id);

        if (!Hash::check($request->password, $credentials->password)) {
            return $this->setResponse(false, "Password wrong", []);
        }

        $credentials = [
            'username' => $credentials->username,
            'password' => $request->password
        ];

        $token = auth('api')->attempt($credentials);

        User::where('user_id', $user_id)->update(['api_token' => $token]);

        return $this->setResponse(true, "Successfully regenerate token", []);
    }
}
