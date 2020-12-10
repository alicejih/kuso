<?php

namespace App\Http\Controllers;
use App\Models\Bandroom;
use App\Models\Bandroomrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class BandroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (is_null(Auth::user())) {
            return redirect(route('login'));
        }
        return view('bandrooms.index', ['bandrooms' => Bandroom::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $bandroom = Bandroom::find($id);
        return view('bandrooms.bandroom_lend' , ['bandroom' => $bandroom]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bandroom  $bandroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $bandroom = Bandroom::find($id);
        return view('bandrooms.bandroom_list' , ['bandroom' => $bandroom]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bandroom  $bandroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Bandroom $bandroom)
    {
        //
    }

    public function bandroom_check(Request $request, $id)
    {
        //

        $lend_date = $request->lend_date;
        $lend_time = $request->lend_time;
        $content = $request->content;
        $bandcheck=Bandroomrecord::where('bandroom_id',$id)
        ->select('lentdate')
        ->addselect('lenttime')
        ->where('lentdate','=',$lend_date)
        ->where('lenttime','=',$lend_time)
        ->get();


        if ($bandcheck->isEmpty()){
            $bandroomrecord= new Bandroomrecord;
            $bandroomrecord->bandroom_id = $id;
            $bandroomrecord->lentdate = $lend_date;
            $bandroomrecord->lenttime = $lend_time;
            $bandroomrecord->content= $content;
            $bandroomrecord->save();
            return view('bandrooms.bandroom_sure');
        }

        else{
            return view('bandrooms.bandroom_error');

        }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bandroom  $bandroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bandroom $bandroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bandroom  $bandroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bandroom $bandroom)
    {
        //
    }
}
