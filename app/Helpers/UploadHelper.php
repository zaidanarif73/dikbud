<?php

namespace App\Helpers;
use Illuminate\Support\Str;
use Storage;

class UploadHelper{

    public static function upload_file($file,$last_folder,$valid_ext=[],$max_size=50971520)
    {
        $return = [];
        try{
            $path = 'public/'.$last_folder.'/';
            
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
    
            if($size > $max_size){
                $return["IsError"] = TRUE;
                $return["Message"] = "Maksimal ukuran file adalah 5 MB";
                goto ResultData;
            }
    
            if(count($valid_ext) > 0){
                if(!in_array(strtolower($ext), $valid_ext)){
                    $return["IsError"] = TRUE;
                    $return["Message"] = "Format file diperbolehkan yaitu ".implode(" , ",$valid_ext);
                    goto ResultData;
                }
            }
    
            $name = Str::random(40). "." . $ext;
            $put = Storage::putFileAs($path, $file, $name);
    
            $return["IsError"] = FALSE;
            $return["Message"] = "Berhasil mengupload file";
            $return["Path"] = $last_folder."/".$name; 
            goto ResultData;
    
            }catch(\Throwable $e){
            $return["IsError"] = TRUE;
            $return["Message"] = $e->getMessage();
            goto ResultData;
        }
        
        ResultData:
        return $return;
    }
}
