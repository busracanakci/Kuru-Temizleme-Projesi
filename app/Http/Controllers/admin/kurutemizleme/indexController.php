<?php

namespace App\Http\Controllers\admin\kurutemizleme;

use App\Helper\mHelper;
use File;
use App\Http\Controllers\Controller;
use App\Kurutemizleme;
use App\Utu;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Kurutemizleme::paginate(10);
        return view('admin.kurutemizleme.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.kurutemizleme.create');
    }
    public function store(Request $request)
    {
       $all = $request->except('_token');
       $all['selflink'] = mHelper::permalink($all['name']);
       $insert = Kurutemizleme::create($all);
       if($insert)
       {
           return redirect()->back()->with('status','Hizmet Eklendi');
       }
       else{
           return redirect()->back()->with('status','Hizmet Ekelenemedi');
       }
    }
    public function edit($id){

        $c = Kurutemizleme::where('id','=',$id)->count();
        if($c!=0)
        {
        $data = Kurutemizleme::where('id','=',$id)->get();
        return view('admin.kurutemizleme.edit',['data'=>$data]);

        }
        else{
            return redirect('/');
        }
    }
    public function update(Request $request){
        $id = $request->route('id');
        $c = Kurutemizleme::where('id','=',$id)->get();

            $data = Kurutemizleme::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = Kurutemizleme::where('id','=',$id)->update($all);
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

        $c = Kurutemizleme::where('id','=',$id)->get();

            $data = Kurutemizleme::where('id', '=', $id)->get();
            Kurutemizleme::where('id', '=', $id)->delete();
            return redirect()->back();



    }

}
