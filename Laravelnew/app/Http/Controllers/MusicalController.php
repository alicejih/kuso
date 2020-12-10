<?php

namespace App\Http\Controllers;

use App\Models\Musical;
use App\Models\MusicalRecord;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class MusicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (is_null(Auth::user())) {
            return redirect(route('login'));
        }

        else{
        $page = $request->query('page');
        if (!$page) $page = 1;
        $offset = ($page - 1) * 8;

        $count = Musical::count();
        $page_count = ceil($count/8);

        $musicals = Musical::limit(8)->offset($offset)->get(); // 抓樂器資料
        return view('musical.musical', ['musicals' => $musicals]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Musical  $musical
     * @return \Illuminate\Http\Response
     */
    public function show(Musical $musical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musical  $musical
     * @return \Illuminate\Http\Response
     */
    public function edit(Musical $musical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musical  $musical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musical $musical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musical  $musical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musical $musical)
    {
        //
    }

    public function musical_intr($id)
    {
        $musical = Musical::where('id', $id)->first(); // 抓樂器資料
        return view('musical.musical_intr', ['musical' => $musical]);
    }

    public function musical_reserve($id)
    {
        $musical = Musical::where('id', $id)->first(); // 抓樂器資料
        return view('musical.musical_reserve', ['musical' => $musical]);
    }

    public function musical_reserve_add(Request $request, $id)
    {
        $array = explode(" - ", $request->period);
        $ps = $request->ps;
        $start = Carbon::parse($array[0]);
        $end = Carbon::parse($array[1]);
        $musicals = Musical::where('id',$id);


        $ancer=MusicalRecord::where('musical_id',$id)
        ->select('musical_start')
        ->addselect('musical_end')
        ->WhereBetween('musical_end', [$start, $end])
        ->orwhere('musical_start','<',$start)
        ->where('musical_end','>',$end)
        ->where('musical_start','>',$start)
        ->get();




        if ($ancer->isEmpty()){
            $musicalRecord= new MusicalRecord;
            $musicalRecord->musical_id = $id;
            $musicalRecord->musical_start = $start;
            $musicalRecord->musical_end = $end;
            $musicalRecord->musical_ps = $ps;
            $musicalRecord->save();
            return view('musical.musical_sure', ['musicals' => $musicals]);
        }

        else{
            return view('musical.musical_sureN', ['musicals' => $musicals]);

        }


    }

}
