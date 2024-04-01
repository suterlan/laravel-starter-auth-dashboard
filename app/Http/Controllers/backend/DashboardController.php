<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $karyawanCount = User::withoutRole('super admin')->count();
        // dd($userCount);
        return view('backend.dashboard', [
            'title'     => 'Admin Dashboard',
            'jmlKaryawan'   => $karyawanCount,
        ]);
    }
}
