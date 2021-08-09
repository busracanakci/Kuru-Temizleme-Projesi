<?php

namespace App\Http\Controllers\admin\yikama;

use App\Helper\mHelper;
use File;
use App\Http\Controllers\Controller;
use App\Models\Yikama;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Yikama::paginate(10);
        return view('admin.yikama.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.yikama.create');
    }
    public function store(Request $request)
    {




        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Yikama::create($all);
        if($insert)
        {
            return redirect()->back()->with('status','Hizmet Eklendi');
        }
        else{
            return redirect()->back()->with('status','Hizmet Ekelenemedi');
        }
    }
    public function edit($id){

        $c = Yikama::where('id','=',$id)->count();
        if($c!=0)
        {
            $data = Yikama::where('id','=',$id)->get();
            return view('admin.yikama.edit',['data'=>$data]);

        }
        else{
            return redirect('/');
        }
    }
    public function update(Request $request){
        $id = $request->route('id');
        $c = Yikama::where('id','=',$id)->get();

        $data = Yikama::where('id','=',$id)->get();
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Yikama::where('id','=',$id)->update($all);
        if($update)
        {
            return redirect()->back()->with('status','Hizmet Başarı ile Güncellendi ');
        }
        else{
            return redirect()->back()->with('status','Hizmet Güncellenemedi ');
        }





    }
    public function delete($id)
    {

        $c = Yikama::where('id','=',$id)->get();

            $data = Yikama::where('id', '=', $id)->get();
            Yikama::where('id', '=', $id)->delete();
            return redirect()->back();



    }
}
