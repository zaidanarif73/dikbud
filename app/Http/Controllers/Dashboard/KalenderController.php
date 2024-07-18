<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Kalender\StoreRequest;
use App\Http\Requests\Kalender\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Pagination\Paginator;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        protected $kalender;
        protected $route = 'dashboard.pages.kalender.';
        public function __construct(){
            $this->route = "dashboard.kalender.";
            $this->view = "dashboard.pages.kalender.";
            $this->kalender = new Kalender();
            Paginator::useBootstrap();
        }
    
         public function index(Request $request)
        {
            $table = $this->kalender;  //declaration of model databases
            $search = $request->search; //for search filter in modal
            if(!empty($search)){
                $table = $table->where(function($query2) use($search){
                    $query2->where("title","like","%".$search."%");
                });
            }
            
            $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
            $table = $table->paginate(10);   //limit paginate only 10 data appears per load
            $data = [
                'table' => $table,                              
            ];
            return view($this->view."index",$data);
        }
    
        public function create()
        {
            return view($this->view."create");
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(StoreRequest $request){
            try {
                $title = $request->title;
                $description = $request->description;
                $date_mulai = $request->date_mulai;
                $date_selesai = $request->date_selesai;
                
                
              
                //store on db
                $create = $this->kalender->create([
                    'title' => $title,
                    'description' => $description,
                    'date_mulai'=> $date_mulai,
                    'date_selesai'=> $date_selesai
                ]);
                
                alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
                return redirect()->route($this->route."index");
            } catch (\Throwable $e) {
                Log::emergency($e->getMessage());
                alert()->error('Gagal',$e->getMessage());
                return redirect()->route($this->route."create")->withInput();
            } 
        }
    
        public function show($id)
        {
            $result = $this->kalender;
            $result = $result->where('id',$id);
            $result = $result->first();
    
            if(!$result){
                alert()->error('Gagal',"Data tidak ditemukan");
                return redirect()->route($this->route."index");
            }
    
            $data = [
                'result' => $result,
            ];
    
            return view($this->view."show",$data);
        }
    
        
        public function edit($id)
        {
            $result = $this->kalender;
            $result = $result->where('id',$id);
            $result = $result->first();
    
            if(!$result){
                alert()->error('Gagal',"Data tidak ditemukan");
                return redirect()->route($this->route."index");
            }
    
            $data = [
                'result' => $result,
            ];
    
            return view($this->view."edit",$data);
        }
    
        public function update(UpdateRequest $request, $id)
        {
            try {
                $result = $this->kalender;
                $result = $result->where('id',$id);
                $result = $result->first();
    
                if(!$result){
                    throw new Error("Data tidak ditemukan");
                }
    
                $title = $request->title;
                $description = $request->description;
                $date_mulai = $request->date_mulai;
                $date_selesai = $request->date_selesai;
               
    
    
                $result->update([
                    'title' => $title,
                    'description' => $description,
                    'date_mulai'=> $date_mulai,
                    'date_selesai'=> $date_selesai
                ]);
    
                alert()->html('Berhasil','Data berhasil diubah','success'); 
                return redirect()->route($this->route."index");
    
            } catch (\Throwable $e) {
                Log::emergency($e->getMessage());
    
                alert()->error('Gagal',$e->getMessage());
                return redirect()->route($this->route."edit",$id)->withInput();
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
            try {
                $result = $this->kalender;
                $result = $result->where('id',$id);
                $result = $result->first();
    
                $result->delete();
    
                alert()->html('Berhasil','Data berhasil dihapus','success'); 
                return redirect()->route($this->route."index");
    
            } catch (\Throwable $e) {
                Log::emergency($e->getMessage());
    
                alert()->error('Gagal',$e->getMessage());
                return redirect()->route($this->route."index");
            }
        }
}
