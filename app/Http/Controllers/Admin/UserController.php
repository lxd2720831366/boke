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
        //接收搜索的条件
        $search_title =$request ->input('title','');
        $search_auth =$request ->input('auth','');
        $articles = DB::table('articles');
        if(!empty($search_title)){
            $articles->where('title','like','%'.$search_title.'%');
        }
        if(!empty($search_auth)){
            $articles->where('auth','like','%'.$search_auth.'%');
        }
        //paginate 查询数据并分页
        $data = $articles 
            ->select('id','title','auth','laiyuan','type','create_time','update_time','status')
            ->paginate(1);
           
        //加载模板
        return view('admin.user.index',['request'=>$request->all(),'title'=>'文章列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('admin.user.create',['title'=>'文章添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收数据
        $data = $request ->except('_token');
        $data['create_time'] = date('Y-m-d H:i:s',time());
        $data['update_time'] = date('Y-m-d H:i:s',time());
        $res = DB::table('articles')->insert($data);
        if($res){
            return redirect('admin/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $data = DB::table('articles')->where('id','=',$id)->first();
        //加载模板
        return view('admin.user.edit',['data'=>$data,'title'=>'文章修改']);
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
        $arr = $request -> except(['_token','_method']);
        $arr['update_time'] = date('Y-m-d H:i:s',time());
        //执行修改
        $res = DB::table('articles')->where('id','=',$id)->update($arr);
        if($res){
            return redirect('admin/user')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
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
        $res = DB::table('articles')->where('id','=',$id)->delete();
         if($res){
            return redirect('admin/user')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function deleteall(Request $request)
    {
        //接收要删除数据的id号
        $ids = $request ->input('ids');
        $res = DB::table('articles')->whereIn('id',$ids)->delete();
        if($res){
            echo 'success';
            exit;
        }else{
            echo 'error';
            exit;
        }
    }
}
