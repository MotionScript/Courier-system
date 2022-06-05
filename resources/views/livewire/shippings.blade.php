<div>


    <div class="card">
        <div class="card-header">Add New Shippment</div>
        <div class="card-body">
            <form action="" method="post"  wire:submit.prevent="AddShipment()">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <span class="text-left "><b>Sender's Details</b></span> <hr>
                        <div class="form-group">
                            <label>Sender's Name</label>
                            <input type="text" name="" class="form-control" wire:model="s_name">
                            @error('s_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sender's Email</label>
                            <input type="email" name="" class="form-control" wire:model="s_email">
                            @error('s_email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sender's Address</label>
                            <input type="text" name="" class="form-control" wire:model="s_address">
                            @error('s_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><!--end col 6-->

                    <div class="col-md-6">
                        <span class="text-right "><b>Receiver's Details</b></span> <hr>
                        <div class="form-group">
                            <label>Receiver's Name</label>
                            <input type="text" name="" class="form-control" wire:model="r_name">
                            @error('r_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Receiver's Phone</label>
                            <input type="text" name="" class="form-control" wire:model="r_phone">
                            @error('r_phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Receiver's Email</label>
                            <input type="email" name="" class="form-control" wire:model="r_email">
                            @error('r_email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Receiver's Country</label>
                            <input type="text" name="" class="form-control" wire:model="r_country">
                            @error('r_country')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Receiver's Address</label>
                            <input type="text" name="" class="form-control" wire:model="r_address">
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
                        <select name="type" class="form-control" wire:model="type">
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
                        <input type="text" class="form-control" wire:model="weight">
                        @error('weight')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" name="" class="form-control" wire:model="product">
                        @error('product')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Destinamtion</label>
                        <input type="text" name="" class="form-control" wire:model="destination">
                        @error('destination')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" name="" class="form-control" wire:model="comment">
                        @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

               </div><!--end col-md-6-->

               <div class="col-md-6">
                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" name="" class="form-control" wire:model="origin">
                    @error('origin')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="" class="form-control" wire:model="quantity">
                    @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Departure Date</label>
                    <input type="date" name="" class="form-control" wire:model="departure_date">
                    @error('departure_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Pickup Date</label>
                    <input type="date" name="" class="form-control" wire:model="pickup_date">
                    @error('pickup_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="" class="form-control" wire:model="status">
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               </div><!--end col-md-6-->

<div class="col-md-12">

    <h3>Payment Invoice</h3>
    <hr class="bg-danger">
</div>



<div class="col-md-4">
    <div class="form-group">
        <label>Payment Method</label>
        <input type="text" name="" class="form-control" wire:model="payment_method">
        @error('payment_method')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Payment Status</label>
      <select name="payment_status" class="form-control" wire:model="payment_status">
          <option value="" selected>Select</option>
          <option value="Paid">Paid</option>
          <option value="Unpaid">Unpaid</option>
      </select>
        @error('payment_status')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Amount </label>
        <input type="number" name="" class="form-control" wire:model="amount">
        @error('amount')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <hr class="bg-danger">


    </div>



               </div><!--end row-->
               <input type="submit" value="Add Shipment" class="btn btn-info">
            </form>
        </div>
    </div>














































    </div>

