<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Redirect;

class datatableController extends Controller
{
    public function ver(){
        $users = User::all();
        return view('admin.datatable',compact('users'));
    }
}