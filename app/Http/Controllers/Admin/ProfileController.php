<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view(('admin.dashboard.index'));
    }
    public function getlogout()
    {
        auth()->logout();
        return redirect()->route('getLogin');
    }
}
