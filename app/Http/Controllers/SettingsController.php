<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use IIlluminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //update site
    public function UpdateSite(Request $request, $id){
        SiteSettings::findOrFail($id)->update([
           'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email,
           'address' => $request->address,
           'facebook' => $request->facebook,
           'twitter' => $request->twitter,
           'instagram' => $request->instagram,
           'youtube' => $request->youtube,
        ]);
        $notification = array(
            'message' => 'Site Updated Successfully',
            'alert-type' => 'success' );
            return redirect()->back()->with($notification);
    }
//update site logo image
public function UpdateLogo(Request $request, $id){
    $old_logo = $request->old_logo;
    $old_favicon = $request->old_favicon;

    if($request->file('logo')){
        //delete old image
        if(File::exists($old_logo)){
            unlink($old_logo);
        }


    $image = $request->file('logo');
   $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(347, 108)->save('uploads/images/'.$filename);
    $logo_url = 'uploads/images/'.$filename;
    }

    if($request->file('favicon')){
        //delete old image
        if(File::exists($old_favicon)){
            unlink($old_favicon);
        }

    $image1 = $request->file('favicon');
   $filename1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
    Image::make($image1)->resize(64, 64)->save('uploads/images/'.$filename1);
    $favicon_url = 'uploads/images/'.$filename1;
    }

    SiteSettings::findOrFail($id)->update([
           'logo' => $logo_url,
           'favicon' => $favicon_url,
    ]);
    $notification = array(
        'message' => 'Site Logos Updated Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}


//update seo
public function UpdateSEO(Request $request, $id){
    SEO::findOrFail($id)->update([
        'meta_author' => $request->meta_author,
        'meta_keywords' => $request->meta_keywords,
        'meta_description' => $request->meta_description,
    ]);
    $notification = array(
        'message' => 'SEO Updated Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}






























































}
