<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        echo "<pre>";
//        var_dump($request);

//        请求路径
        $path=$request->path();
//        请求地址
        $url=$request->url();
        // 请求方式
        $method=$request->method();
        //检测请求方式
        $res=$request->isMethod('post');
        //获取所有参数
        $allparam=$request->all();

        //获取单个参数
        $name=$request->input('name');
        //检测参数是否存在
        $r=$request->has('sex');
        //设置默认值
        $rr=$request->input('sex','w');
        //提取部分参数
        //提取指定的参数
        $data=$request->only(['name','age']);
        //把某个参数之外的所有参数获取
        $data1=$request->except(['name']);
        dd($data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('req');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $all=$request->all();
//        $data=$request->except(['_token']);
//        dd($data);
        $input=$request->input('name');
//        $request->flash();
//        $request->flashOnly('email');
//        $request->flashExcept('email');
        if($input==null){
            return back()->withInput();
        }else{
            echo "666";
        }
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
