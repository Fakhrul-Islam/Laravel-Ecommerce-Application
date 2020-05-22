<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

use App\Traits\Upload;

class SettingController extends Controller
{	
   public function index()
   {
   		return view('admin.settings.index');
   }

   public function update(Request $request)
   {
   		if(isset($request->site_logo))
         {
            $upload = new Upload();
            //Delete Existing File
            if(config('settings.site_logo') != null)
            {
               $upload->deleteFile('settings',config('settings.site_logo'),'public');
            }

            //Upload File
            $file = $request->file('site_logo');
            $name = $upload->uploadFile('settings', $file, 'public' );

            //Update Database
             Settings::set('site_logo', $name.'.'.$file->getClientOriginalExtension());
            
         }elseif(isset($request->site_favicon))
         {

           $upload = new Upload();
            //Delete Existing File
            if(config('settings.site_favicon') != null)
            {
               $upload->deleteFile('settings',config('settings.site_favicon'),'public');
            }

            //Upload File
            $file = $request->file('site_favicon');
            $name = $upload->uploadFile('settings', $file, 'public' );

            //Update Database
             Settings::set('site_favicon', $name.'.'.$file->getClientOriginalExtension());

         }else
         {
            $keys = $request->except('_token');

            foreach($keys as $key => $value)
            {
               Settings::set($key, $value);
            }
         }   		

   		return redirect()->back();
   }
}
