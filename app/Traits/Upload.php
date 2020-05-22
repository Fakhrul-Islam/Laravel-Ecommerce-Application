<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Upload
{
	//Upload File in directory
	public function uploadFile($folder = '', $file = '', $disk = 'public' )
	{
		//Create Directory
        if(!Storage::disk($disk)->exists($folder))
        {
           Storage::disk($disk)->makeDirectory($folder);
        }

        //Upload File
        $name = time().'-'.Str::random(10);
        $file->storeAs($folder, $name.'.'.$file->getClientOriginalExtension(), $disk);
        return $name;
	}


	//Delete Existing File
	public function deleteFile($folder, $fileName, $disk="public")
	{
		//Delete Existing File        
      	if(Storage::disk($disk)->exists($folder.'/'.$fileName))
       {
          Storage::disk($disk)->delete($folder.'/'.$fileName);
          return true;
       }
       return false;
	}
}