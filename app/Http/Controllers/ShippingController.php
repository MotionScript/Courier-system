<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shipping;
use PDF;

class ShippingController extends Controller
{
    //view shipping
    public function ViewSHipping($id){
        $ship = Shipping::find($id);
        return view('backend.shipping.show', compact('ship'));

    }
    public function DeleteSHipping($id){
        Shipping::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Shippent Deleted successfully',
            'alert-type' => 'success' );
            return redirect()->route('all-shippments')->with($notification);
    }
//edit ship status
public function EditSHippingStatus($id){
    $ship = Shipping::findOrFail($id);
    return view('backend.shipping.edit-status', compact('ship'));

}


//update ship status
public function UpdateSHippingStatus(Request $request, $id){
       Shipping::findOrFail($id)->update([
             'status' => $request->status,
             'origin' => $request->origin,
             'comment' => $request->comment,
       ]);

       $notification = array(
           'message' => 'Shippent Updated successfully',
           'alert-type' => 'success' );
           return redirect()->route('all-shippments')->with($notification);
}
//label
public function LabelSHippingStatus($id){
    $label = Shipping::find($id);
    return view('backend.shipping.label', compact('label'));
}

//shipping incoice
public function SHippingInvoice($id){
    $invoice = Shipping::find($id);
    $pdf =  PDF::loadView('backend.shipping.invoice', compact('invoice'));
    return $pdf->download('receipt.pdf');
}










}
