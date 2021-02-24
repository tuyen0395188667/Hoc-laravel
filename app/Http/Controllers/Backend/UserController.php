<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'List User';
    }
    // Phương thức Get
    public function create()
    {
        return view('backend.user.create');
    }

    // Phương thức port
    public function store(Request $request)
    {
        // Trả về tất cả giá trị input của request, hàm dd() = val_dump()
        dd(__METHOD__, $request -> all());
    }
    public function update(Request $request)
    {
        // Trả về tất cả giá trị input của request, hàm dd() = val_dump()
        dd(__METHOD__, $request -> all());
    }

}
