<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['breadcrumb'] = 'Курсы обмена';

        return view('home', $data);
    }

    public function getMails() {
        $data['breadcrumb'] = 'Заявки пользователей';

        return view('mails', $data);
    }

    public function getSettings() {
        $data['breadcrumb'] = 'Настройки';

        return view('settings', $data);
    }
}
