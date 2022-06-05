<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shipping;

class Shippings extends Component
{
public $s_name, $s_email, $s_address, $payment_method, $payment_status, $amount, $r_name, $r_phone, $r_email, $r_country, $r_address, $type, $weight, $product, $destination, $origin, $quantity, $departure_date, $pickup_date, $status, $comment;


    public function render()
    {
        return view('livewire.shippings');
    }

//add shipping
public function AddShipment(){
    $this->validate([
              's_name' => 'required',
              's_email' => 'required',
              's_address' => 'required',
              'r_name' => 'required',
              'r_phone' => 'required',
              'r_email' => 'required',
              'r_country' => 'required',
              'r_address' => 'required',
              'type' => 'required',
              'weight' => 'required',
              'product' => 'required',
              'destination' => 'required',
              'comment' => 'required',
              'origin' => 'required',
              'quantity' => 'required',
              'departure_date' => 'required',
              'pickup_date' => 'required',
              'status' => 'required',
              'payment_method' => 'required',
              'payment_status' => 'required',
              'amount' => 'required',
    ]);
    Shipping::create([

        's_name' => $this->s_name,
        's_email' => $this->s_email,
        's_address' => $this->s_address,
        'r_name' => $this->r_name,
        'r_phone' => $this->r_phone,
        'r_email' => $this->r_email,
        'r_country' => $this->r_country,
        'r_address' => $this->r_address,
        'tracking_no' => 'TR'.rand(2268498599,9999999998),
        'type' => $this->type,
        'weight' => $this->weight,
        'product' => $this->product,
        'destination' => $this->destination,
        'origin' => $this->origin,
        'quantity' => $this->quantity,
        'reference_no' => 'RF'.rand(9999999,999999999),
        'departure_date' => $this->departure_date,
        'pickup_date' => $this->pickup_date,
        'status' => $this->status,
        'comment' => $this->comment,
        'invoice_no' =>  'IV'.rand(9999999,999999999),
        'payment_method' => $this->payment_method,
        'payment_status' => $this->payment_status,
        'amount' => $this->amount,

    ]);
    $this->ResetS();
    $this->dispatchBrowserEvent('alert',
    ['type' => 'success',  'message' => 'Shippment Added Successfully']);

}




public function ResetS() {
    $this->s_name = ' ';
    $this->s_email = ' ';
    $this->s_address = ' ';
    $this->r_name = ' ';
    $this->r_phone = ' ';
    $this->r_email = ' ';
    $this->r_country = ' ';
    $this->r_address = ' ';
    $this->type = ' ';
    $this->weight = ' ';
    $this->product = ' ';
    $this->destination = ' ';
    $this->comment = ' ';
    $this->origin = '';
    $this->quantity = ' ';
    $this->departure_date = ' ';
    $this->pickup_date = '';
    $this->status = '';
    $this->payment_status = '';
    $this->payment_method = '';
    $this->amount = '';
}










































}
