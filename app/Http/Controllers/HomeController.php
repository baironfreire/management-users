<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Contracts\UserServiceInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['userService' => $this->userService]);
    }
}
