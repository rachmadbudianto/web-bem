<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//penghubung ke model
use App\Structure;
use App\Presiden;

class PagesController extends Controller
{
    public function index ()
    {
        return view ('bem.welcome');
    }

    public function about ()
    {
        return view ('bem.about');
    }

    public function contact()
    {
        return view ('bem.contact');
    }

    public function struktur()
    {
        // database manual
        // $struktur = DB::table('structure')->get();

        //ini model yang gak default
        // protected $table =('structure');
        
        return view ('struktur.struktur');
    } 

    public function editstruktur()
    {
        return view('crud.editstruktur');
    }

    public function create()
    {
        return view ('crud.create');
    }

    
    public function tentang ()
    {
        return view ('about', ['nama' => 'Rachmad Budianto']);
    }

    public function presiden()
    {
        $image = DB::table('pres')->get();
        return view ('struktur/pres',  ['image' => $image] );
    }

}
