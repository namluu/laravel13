<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BackendController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();

        return view('backend.dashboard', ['user' => $user]);
    }
}
