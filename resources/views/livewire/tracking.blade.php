<div>










    @if ($r_name)


<div class="section-full  p-t120 p-b120">
    <div class="section-content">
        <div class="container shadow">

            <div class="contact-one">
                <!-- TITLE START-->
                <div class="section-head left wt-small-separator-outer">
                    <h3 class="wt-title m-b30">Shipping Details</h3>
                </div>
                <!-- TITLE END-->
                <!-- CONTACT FORM-->
                <div class="contact-one-inner  site-bg-sky-blue-light">
                <div class="row">
                    <span class="text-center text-danger">
                        <img src="{{ asset('uploads/br.png') }}" style="width:200px"> <br>
                           <h3 class="text-danger">{{ $tracking_no }}</h3></span>
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-form-outer">


<form action="" method="post"  wire:submit.prevent="AddShipment()">
@csrf
<div class="row">
<div class="col-md-6">
<span class="text-left "><b>Sender's Details</b></span> <hr>
<div class="form-group">
<label>Sender's Name</label>
<input type="text" name="" class="form-control" wire:model="s_name" readonly>
@error('s_name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Sender's Email</label>
<input type="email" name="" class="form-control" wire:model="s_email" readonly>
@error('s_email')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Sender's Address</label>
<input type="text" name="" class="form-control" wire:model="s_address" readonly>
@error('s_address')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div><!--end col 6-->

<div class="col-md-6">
<span class="text-right "><b>Receiver's Details</b></span> <hr>
<div class="form-group">
<label>Receiver's Name</label>
<input type="text" name="" class="form-control" wire:model="r_name" readonly>
@error('r_name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Receiver's Phone</label>
<input type="text" name="" class="form-control" wire:model="r_phone" readonly>
@error('r_phone')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Receiver's Email</label>
<input type="email" name="" class="form-control" wire:model="r_email" readonly>
@error('r_email')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Receiver's Country</label>
<input type="text" name="" class="form-control" wire:model="r_country" readonly>
@error('r_country')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Receiver's Address</label>
<input type="text" name="" class="form-control" wire:model="r_address" readonly>
@error('r_address')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div><!--end col 6-->

</div>
<span class="text-center"><b>Shipment Details</b></span> <hr>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Shipping Type</label>
<select name="type" class="form-control" wire:model="type" readonly>
<option value="" disabled="">Select</option>
<option value="Air Freight">Air Freight</option>
<option value="Road Freight">Road Freight</option>
<option value="Rail Freight">Rail Freight</option>
<option value="Animal Shipping">Animal Shipping</option>
</select>
@error('type')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Weight</label>
<input type="text" class="form-control" wire:model="weight" readonly>
@error('weight')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Product</label>
<input type="text" name="" class="form-control" wire:model="product" readonly>
@error('product')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Destinamtion</label>
<input type="text" name="" class="form-control" wire:model="destination" readonly>
@error('destination')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label>Comment</label>
<input type="text" name="" class="form-control" wire:model="comment" readonly>
@error('comment')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

</div><!--end col-md-6-->

<div class="col-md-6">
<div class="form-group">
<label>Origin</label>
<input type="text" name="" class="form-control" wire:model="origin" readonly>
@error('origin')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Quantity</label>
<input type="text" name="" class="form-control" wire:model="quantity" readonly>
@error('quantity')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Departure Date</label>
<input type="date" name="" class="form-control" wire:model="departure_date" readonly>
@error('departure_date')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Pickup Date</label>
<input type="date" name="" class="form-control" wire:model="pickup_date" readonly>
@error('pickup_date')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label>Status</label>
<input type="text" name="" class="form-control" wire:model="status" readonly>
@error('status')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div><!--end col-md-6-->

</div><!--end row-->

</form>




</div>
</div>



</div>
</div>
</div>

</div>
</div>
</div>

@else

<div class="section-full  p-t120 p-b120">
<div class="section-content">
<div class="container">

<div class="contact-one">
<!-- TITLE START-->
<div class="section-head left wt-small-separator-outer">
<h3 class="wt-title m-b30">Enter your tracking number</h3>
</div>
<!-- TITLE END-->
<!-- CONTACT FORM-->
<div class="contact-one-inner  site-bg-sky-blue-light">
<div class="row">

<div class="col-lg-12 col-md-12">
<div class="contact-form-outer">
<form class="cons-contact-form" method="post" action="" wire:submit.prevent="TrackShipment()">
@csrf
<div class="row">


<div class="col-lg-12">
<div class="form-group mb-3">
<textarea name="message" class="form-control" rows="3" placeholder="tracking number here" required wire:model="tracking_no"></textarea>
</div>
</div>

<div class="col-md-12">
<button type="submit" class="btn-half site-button"><span>Track Now</span><em></em></button>
</div>

</div>
</form>
                        </div>
                    </div>



                </div>
                </div>
            </div>

        </div>
    </div>
</div>











@endif











</div>
