<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
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
        return view('teachers.index', ['teachers' => Teacher::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Teacher = Teacher::where('id', $id)->first(); // 抓老師資料
        return view('teachers.teacher_res', ['teachers' => $Teacher]);
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $teacher = Teacher::find($id);
        return view('teachers.teacher_intr' , ['teacher' => $teacher]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }


    public function teacher_check(Request $request, $id)
    {
        $teacher_date= $request->tea_date;
        $teacher_date = $request->tea_date;
        $teacher_time = $request->tea_time;
        $teacher_remarks = $request->tea_remarks;
        $date_str=date('Y-m-d',strtotime($teacher_date));        
        $arr=explode("-", $date_str);             
        $year=$arr[0];             
        $month=sprintf('%02d',$arr[1]);
        $day=sprintf('%02d',$arr[2]);
        $strap = mktime($month,$day,$year);
        $number_wk=date("w",$strap);
        $weekArr=array(7,1,2,3,4,5,6);

        switch($weekArr[$number_wk]){
            case 1 :
                $tea_day = Teacher::where('id', $id)->value('day1');
                $tea_dayA = Teacher::where('id', $id)->value('day1A');
                $TryStrpos=strpos($tea_day,$teacher_time);
                $TryStrpos2=strpos($tea_dayA,$teacher_time);
                if ($TryStrpos === true && $TryStrpos2 === false){
                    $teacher_records= new TeacheRrecord;
                    $teacher_records->teacher_id = $id;
                    $teacher_records->tea_date = $teacher_date;
                    $teacher_records->tea_time = $teacher_time;
                    $teacher_records->tea_remarks = $teacher_remarks;
                    $teacher_records->save();

                    $teachers= new Teacher;
                    $teachers->day1A = $teacher_time;
                    $teachers->save();
                    return view('teachers.teacher_sure');
                }
                else{ 
                    return view('teachers.teacher_error');
                }

            case 2 :
                    $tea_day = Teacher::where('id', $id)->value('day2');
                    $tea_dayA = Teacher::where('id', $id)->value('day2A');
                    $TryStrpos=strpos($tea_day,$teacher_time);
                    $TryStrpos2=strpos($tea_dayA,$teacher_time);
                    if ($TryStrpos === true && $TryStrpos2 === false){
                        $teacher_records= new TeacheRrecord;
                        $teacher_records->teacher_id = $id;
                        $teacher_records->tea_date = $teacher_date;
                        $teacher_records->tea_time = $teacher_time;
                        $teacher_records->tea_remarks = $teacher_remarks;
                        $teacher_records->save();
    
                        $teachers= new Teacher;
                        $teachers->day2A = $teacher_time;
                        $teachers->save();
                        return view('teachers.teacher_sure');
                    }
                    else{ 
                        return view('teachers.teacher_error');
                    }
            case 3 :
                    $tea_day = Teacher::where('id', $id)->value('day3');
                    $tea_dayA = Teacher::where('id', $id)->value('day3A');
                    $con = explode($teacher_time,$tea_day); 
                    $ans = explode($teacher_time,$tea_dayA); 
                    if (count($con)>1 && count($ans)<1){
                        $teacher_records= new TeacheRrecord;
                        $teacher_records->teacher_id = $id;
                        $teacher_records->tea_date = $teacher_date;
                        $teacher_records->tea_time = $teacher_time;
                        $teacher_records->tea_remarks = $teacher_remarks;
                        $teacher_records->save();
        
                        $teachers= new Teacher;
                        $teachers->day3A = $teacher_time;
                        $teachers->save();
                        return view('teachers.teacher_sure');
                        }
                    else{ 
                        return view('teachers.teacher_error');
                        }
            case 4:
                    $tea_day = Teacher::where('id', $id)->value('day4');
                    $tea_dayA = Teacher::where('id', $id)->value('day4A');
                    $con = explode($teacher_time,$tea_day); 
                    $ans = explode($teacher_time,$tea_dayA); 
                    if (count($con)>1 && count($ans)<1){
                        $teacher_records= new TeacheRrecord;
                        $teacher_records->teacher_id = $id;
                        $teacher_records->tea_date = $teacher_date;
                        $teacher_records->tea_time = $teacher_time;
                        $teacher_records->tea_remarks = $teacher_remarks;
                        $teacher_records->save();
            
                        $teachers= new Teacher;
                        $teachers->day4A = $teacher_time;
                        $teachers->save();
                        return view('teachers.teacher_sure');
                            }
                    else{ 
                        return view('teachers.teacher_error');
                            }
            case 5:
                    $tea_day = Teacher::where('id', $id)->value('day5');
                    $tea_dayA = Teacher::where('id', $id)->value('day5A');
                    $con = explode($teacher_time,$tea_day); 
                    $ans = explode($teacher_time,$tea_dayA); 
                    if (count($con)>1 && count($ans)<1){
                        $teacher_records= new TeacheRrecord;
                        $teacher_records->teacher_id = $id;
                        $teacher_records->tea_date = $teacher_date;
                        $teacher_records->tea_time = $teacher_time;
                        $teacher_records->tea_remarks = $teacher_remarks;
                        $teacher_records->save();
                        
                        $teachers= new Teacher;
                        $teachers->day5A = $teacher_time;
                        $teachers->save();
                        return view('teachers.teacher_sure');
                            }
                    else{ 
                        return view('teachers.teacher_error');
                              }
            case 6 :
                return view('teachers.teacher_error');


            case 7 :
                return view('teachers.teacher_error');
        }
    }
}
