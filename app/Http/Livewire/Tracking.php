<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shipping;
use \Illuminate\Session\SessionManager;

class Tracking extends Component
{
    public $tracking_no;
    public  $track;
    public  $s_name, $s_email, $reference_no, $s_address, $r_name, $r_phone, $r_email, $r_country, $r_address, $type, $weight, $product, $destination, $origin, $quantity, $departure_date, $pickup_date, $status, $comment;


    public function render()
    {
        return view('livewire.tracking', ['track' => $this->track]);
    }

    //tracking
    public function TrackShipment(){

        if(Shipping::where('tracking_no', $this->tracking_no)->exists()){

          $this->track = Shipping::where('tracking_no', $this->tracking_no)->first();
        $this->s_name = $this->track->s_name;
        $this->s_email = $this->track->s_email;
        $this->s_address = $this->track->s_address;
        $this->r_name = $this->track->r_name;
        $this->r_email = $this->track->r_email;
        $this->r_phone = $this->track->r_phone;
        $this->r_country = $this->track->r_country;
        $this->r_address = $this->track->r_address;
        $this->tracking_no = $this->track->tracking_no;
        $this->reference_no = $this->track->reference_no;
        $this->type = $this->track->type;
        $this->weight = $this->track->weight;
        $this->product = $this->track->product;
        $this->destination = $this->track->destination;
        $this->origin = $this->track->origin;
        $this->quantity = $this->track->quantity;
        $this->departure_date = $this->track->departure_date;
        $this->pickup_date = $this->track->pickup_date;
        $this->comment = $this->track->comment;
        $this->status = $this->track->status;



     }else{

        $this->dispatchBrowserEvent('alert',
        ['type' => 'error',  'message' => 'Invalid Tracking Number!']);

     }



    }











}
