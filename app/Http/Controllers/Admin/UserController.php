<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
 	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sou = [];
        if(!empty($request->input('sou'))){
            $sou[] = $request->input('sou');
            $data = DB::table('users')->where('uname', 'like', '%'.$sou[0].'%')->get();

        }else{
            $data = DB::select('select * from users');  

        }
      
        return view('admin.user.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }
    /**
     * [save description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function save(Request $request)
    {
        dump($request->all());exit;
        $uname = $request -> input('uname');
        $email = $request -> input('email');
        $phone = $request -> input('phone');
        $row = DB::insert('insert into users (uname,email,phone) value (?,?,?)',[$uname,$email,$phone]);
        dump($row);
        
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
        $data = DB::select('select * from users where id = ?',[$id]);
        
        
        return view('admin.user.edit',['data' => $data]);
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
        $uname = $request -> input('uname');
        $email = $request -> input('email');
        $phone = $request -> input('phone');

        $row = DB::update('update users set uname=?,email=?,phone=? where id = ?',[$uname,$email,$phone,$id]);
        
        try{
            $row = DB::update('update users set uname=?,email=?,phone=? where id = ?',[$uname,$email,$phone,$id]);
        }catch(Exception $e){
            return redirect('/admin/user/edit/'.$id);
        }
        return redirect('/admin/user/index');
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
        $row =  DB::delete('delete from users where id = ?',[$id]);
        dump($row);
    } 
}
