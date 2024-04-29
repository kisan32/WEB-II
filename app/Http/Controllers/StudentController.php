<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //this is the student page
    function index()
    {
        $std=Student::orderBy('created_at','DESC')->get();
        return view('Students.list',[
            'student'=>$std
        ]);

    }
    //this will show add new student page
    function addnew()
    {
        return view('Students.create');
    }
    //this will insert a student
    function store(Request $request)
    {
        $rules =[
            'sname'=>'required|min:5',
            'sclass'=>'required|min:2|numeric'

        ];
        if($request->input('img')!="")
        {
            $rules['img']='image';
        }
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return redirect()->route('stinfo.Add')->withInput()->withErrors($validator);
        }

        //to store data into database
        $st = new Student;
        $st->sname= $request->input('sname');
        $st->roll= $request->input('sroll');
        $st->class= $request->input('sclass');
        $st->program= $request->input('sprg');
        $st->save();

        //save the image in dedicated folder
        if($request->input('img')!="")
        {
            $image= $request->input('img');
            $ext=$image->getClientOriginalExtension();
            $imagename=time().'.'.$ext;//unique name of image
            $image->move(public_path('Uploads/Images'),$imagename);
            //save in database
            $st->image=$request->input('img');
            $st->save();

        }

        return redirect()->route('stinfo.index')->with('Success','STUDENT ADDED SUCCESSFULY !');
    }
    //this will edit student data page
    function edit()
    {

    }
    //this will show update data page
    function update()
    {

    }
    //this method will remove data page
    function remove()
    {

    }
}
