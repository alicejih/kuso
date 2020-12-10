<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;



class AnnounceController extends Controller
{
    public function index()
    {


        return view('announce.announce', ['announces' => Announce::all()]);
    }

    public function show($id)
    {
        $announce = Announce::find($id);

        return view('announce.announce_present', ['announce' =>$announce]);
    }
}
