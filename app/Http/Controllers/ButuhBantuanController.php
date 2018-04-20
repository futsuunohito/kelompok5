<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

use App\Siswa;
use App\model_login;

class ButuhBantuanController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function butuh_bantuan()
    {
        return view('butuh_bantuan/butuh_bantuan');
    }

        
}
