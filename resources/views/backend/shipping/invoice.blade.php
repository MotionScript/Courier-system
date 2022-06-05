<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>
@php
    $site = App\Models\SiteSettings::find(1);
@endphp
  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>{{ $site->name }}</strong></h2>
        </td>
        <td align="right" style="margin-right:25px;">
            <pre class="font" >
               Head Office
               Email: {{ $site->email }} <br>
               Phone: {{ $site->phone }} <br>
               Address: {{ $site->address }} <br>

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong> {{ $invoice->r_name }} <br>
           <strong>Email:</strong>  {{ $invoice->r_email }}  <br>
           <strong>Phone:</strong>  {{ $invoice->r_phone }}  <br>

           <strong>Country:</strong>  {{ $invoice->r_country }}  <br>
           <strong>Address:</strong>  {{ $invoice->r_address }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Invoice:</span> #{{ $invoice->invoice_no }}</h3>
            Destination:  {{ $invoice->destination }}  <br>
             Delivery Date:  {{ $invoice->pickup_date }}  <br>
            Payment Type :  {{ $invoice->payment_method }} <br>  </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Shipment</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">

        <th>Tracking Number</th>
        <th>Parcel</th>
        <th>Quantity</th>
        <th>Weight</th>
        <th>Pickup Date</th>
      </tr>
    </thead>
    <tbody>


      <tr class="font">
        <td align="center" style="color: red;">
            {{ $invoice->tracking_no }}
        </td>

        <td align="center">
         {{ $invoice->product }}
        </td>

        <td align="center"> {{ $invoice->quantity }} </td>
        <td align="center"> {{ $invoice->weight }} </td>
        <td align="center"> {{ $invoice->pickup_date }} </td>

      </tr>

    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>  ${{ $invoice->amount }} </h2>
            <h2><span style="color: green;">Total:</span>  ${{ $invoice->amount }} </h2>
            <h2><span style="color: green;">Payment Status:</span>
                @if ($invoice->payment_status == 'Paid')
               <span style="color: green;">{{ $invoice->payment_status }}</span>
                @elseif($invoice->payment_status == 'Unpaid')
                <span style="color: red;">{{ $invoice->payment_status }}</span>
                @endif
             </h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>
