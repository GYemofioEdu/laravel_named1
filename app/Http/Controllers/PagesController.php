<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() { return view('pages.home'); }
    function about() { return view('pages.about'); }
    function contact() { return view('pages.contact');}

    function store(Request $request) {
        $name = $request->name;
        return redirect()->route('thanks',['name' => $name ]);
    }

    function thanks($name, Request $request) {
        //dd($request);
        return view('pages.thankyou')->with(compact('name'));
    }

    function registerinit() { return view('pages.register');}

    function register(Request $request) {
        $usr_fullname = $request->usr_fullname;
        $usr_email = $request->usr_email;
        $usr_pwd = $request->usr_pwd;
        $usr_pwd2 = $request->usr_pwd2;

        return redirect()->route('registerdisplay', ['usr_fullname' => $usr_fullname]
            /*
            ,['usr_fullname' => $usr_fullname
                ,'usr_email' => $usr_email
                ,'usr_pwd' => $usr_pwd
                ,'usr_pwd2' => $usr_pwd2
             ]
            */
        );
    }
    function registerdisplay($usr_fullname) {
        return view('pages.registerdisplay')->with(compact('usr_fullname'));
    }

}
