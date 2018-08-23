<?php

namespace App\Http\Controllers;
//导入请求类
use Illuminate\Http\Request;
use DB;
use A;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Request $request  用Reuest 请求类约束请求对象 $request
    public function index(Request $request)
    {
//        $data=DB::select('select * from users');
////        dd($data);
//        $data1=DB::table('users')->paginate(2);
//        $a=$request->input('keywords');
//        DB::table('users')->where('uname','like','%'.$a.'%')->paginate(1);
//        return view('db',['data'=>$data1,'request'=>$request->all()]);
//        fun();
//        $a=new A;
//        $a->sendphone();
        sendphone(15238725004);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
