<?php

namespace App\Http\Controllers;

use App\Models\ClientsLogo;
use App\Models\estimate;
use App\Models\FAQ;
use App\Models\PageCat;
use App\Models\Pages;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\WhyUs;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\File;
use Image;


class HomePageController extends Controller
{
    //store slider
    public function StoreSlider(Request $request){
        $image = $request->file('image');
            $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1919, 940)->save('uploads/images/'.$filename);
            $save_url = 'uploads/images/'.$filename;

            Slider::insert([

                'title' =>$request->title,
                'image' => $save_url,
                'created_at' => Carbon::now(),
                           ]);

                           $notification = array(
                            'message' => 'Slider Added successfully',
                            'alert-type' => 'success' );
                            return redirect()->back()->with($notification);

    }
//dlete slider
public function DeleteSlider($id){
    $slider = Slider::findOrFail($id);
    $img = $slider->image;
    unlink($img);
    Slider::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Slider Deleted successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);

}

//update why us
public function UpdateWhyUs(Request $request, $id){
// dd($request->all());
    $image = $request->file('image');
    $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(400, 720)->save('uploads/images/'.$filename);
    $save_url = 'uploads/images/'.$filename;

 WhyUs::findOrFail($id)->update([
    'title' => $request->title,
    'image' => $save_url,
]);


$notification = array(
    'message' => 'Why Us Updated successfully',
    'alert-type' => 'success' );
    return redirect()->back()->with($notification);

}


//store services
public function ServicesStore(Request $request){
    $image = $request->file('image');
    $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(148, 120)->save('uploads/images/'.$filename);
    $save_url = 'uploads/images/'.$filename;

    Services::create([
        'title' => $request->title,
        'image' => $save_url,
        'body' => $request->body,
        'created_at' => Carbon::now(),

    ]);
    $notification = array(
        'message' => 'Serives Saved successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}




//view services us
public function ServicesView($id){
  $service =  Services::findOrFail($id);

    return view('frontend.services.view', compact('service'));
}

//delete services
public function DeleteServices($id){
    Services::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Services Deleted Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);

}

//store estimate
public function EstimateStore(Request $request){
    estimate::create([
          'title' => $request->title,
          'body' => $request->body,
    ]);
    $notification = array(
        'message' => 'Estimate Saved Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);

}


//delete estimate
public function DeleteEstimate($id){
    estimate::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Estimate Deleted Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);


    }


//store client
public function ClientStore(Request $request){
    $image = $request->file('image');
    $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(176, 33)->save('uploads/images/'.$filename);
    $save_url = 'uploads/images/'.$filename;

   ClientsLogo::create([

        'image' => $save_url,

        'created_at' => Carbon::now(),

    ]);
    $notification = array(
        'message' => 'Clients Saved successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}



//delete client
public function DeleteClient($id){
ClientsLogo::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Client Deleted Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);


    }




//store testy
public function TestyStore(Request $request){
    $image = $request->file('image');
    $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(164, 164)->save('uploads/images/'.$filename);
    $save_url = 'uploads/images/'.$filename;

  Testimonial::create([

        'image' => $save_url,
        'name'=> $request->name,
        'work'=> $request->work,
        'body'=> $request->body,
        'created_at' => Carbon::now(),

    ]);
    $notification = array(
        'message' => 'Testimonial Saved successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}



//delete testy
public function DeleteTesty($id){
    $img = Testimonial::find($id);
    $im = $img->image;
    unlink($im);
    Testimonial::findOrFail($id)->delete();


        $notification = array(
            'message' => 'Client Deleted Successfully',
            'alert-type' => 'success' );
            return redirect()->back()->with($notification);


}

//store page category
public function PageCatStore(Request $request){
    $pagecat_id = PageCat::insertGetId([
        'name' => $request->name,
        'slug' => strtolower(str_replace(' ', '-',$request->name)),
        'created_at' => Carbon::now(),
   ]);

  Pages::insert([
       'pagecat_id' => $pagecat_id,
       'name'=> $request->name,
       'slug'  => strtolower(str_replace(' ', '-',$request->name)),
       'created_at' => Carbon::now(),

   ]);
   $notification = array(
    'message' => 'Page Added successfully',
    'alert-type' => 'success' );
    return redirect()->back()->with($notification);
}


//delete page
public function PageCatDelete($id){
    Pages::where('pagecat_id', $id)->delete();
    PageCat::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Page Deleted successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}

//edit page
public function PageCatEdit(Request $request, $id){
   $page = PageCat::findOrFail($id);
    return view('backend.pages.edit-page', compact('page'));
}
//update page
public function UpdatePage(Request $request, $id){
    Pages::findOrFail($id)->update([
           'body' => $request->body,
    ]);

    $notification = array(
        'message' => 'Page Updated successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}

//user view page
public function UserViewPage($slug){
    $page = pages::where('slug', $slug)->first();

    return view('frontend.pages', compact('page'));
}

//store faq
public function FaqStore(Request $request){
       FAQ::create([
        'q' => $request->q,
        'a' => $request->a,
       ]);

       $notification = array(
        'message' => 'FAQ Saved Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}
//delete faq
public function FaqDelete($id){
    FAQ::findOrFail($id)->delete();

    $notification = array(
        'message' => 'FAQ Delete Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}























}
