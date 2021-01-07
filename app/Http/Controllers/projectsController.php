<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class projectsController extends Controller{
    public function index(){
        $projects = DB::table('projects')->paginate(10);

        //$projectsType = ["Organization","Private","Government"];

        return view('projects',['projects'=>$projects]);
    }

    public function addprojects(){
        return view('addprojects');
    }

    public function manage(Request $request){
        DB::table('projects')->insert([
            'nama_project' => $request->nama_project,
            'tipe_project' => $request->tipe_project,
            'keterangan_project' => $request->keterangan_project
        ]);
        return redirect('/projects');
    }

    public function editprojects($id){
        $projects = DB::table('projects')->where('id_project',$id)->get();
        return view('editprojects',['projects'=>$projects]);
    }

    public function update(Request $request){
        DB::table('projects')->where('id_project',$request->id_project)->update([
            'nama_project' => $request->nama_project,
            'tipe_project' => $request->tipe_project,
            'keterangan_project' => $request->keterangan_project
        ]);
        return redirect('/projects');
    }

    public function deleteprojects($id){
        $projects = DB::table('projects')->where('id_project',$id)->delete();
        return redirect('/projects');
    }

    public function searchprojects(Request $request){
        
		$searchprojects = $request->searchprojects;
 
        $projects = DB::table('projects')
        ->where('nama_project','like',"%".$searchprojects."%")
        ->paginate();

        return view('projects',['projects' => $projects]);
    }
}