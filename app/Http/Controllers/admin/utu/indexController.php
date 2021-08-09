<?php

namespace App\Http\Controllers\admin\utu;

use App\Helper\mHelper;
use File;
use App\Http\Controllers\Controller;
use App\Models\Utu;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Utu::paginate(10);
        return view('admin.utu.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.utu.create');
    }
    public function store(Request $request)
    {




        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Utu::create($all);
        if($insert)
        {
            return redirect()->back()->with('status','Hizmet Eklendi');
        }
        else{
            return redirect()->back()->with('status','Hizmet Ekelenemedi');
        }
    }
    public function edit($id){

        $c = Utu::where('id','=',$id)->count();
        if($c!=0)
        {
            $data = Utu::where('id','=',$id)->get();
            return view('admin.kurutemizleme.edit',['data'=>$data]);

        }
        else{
            return redirect('/');
        }
    }
    public function update(Request $request){
        $id = $request->route('id');
        $c = Utu::where('id','=',$id)->get();

        $data = Utu::where('id','=',$id)->get();
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Utu::where('id','=',$id)->update($all);
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

        $c = Utu::where('id','=',$id)->get();

            $data = Utu::where('id', '=', $id)->get();
            Utu::where('id', '=', $id)->delete();
            return redirect()->back();
        }

}

