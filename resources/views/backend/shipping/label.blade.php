<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @php
         $site = App\Models\SiteSettings::find(1);
    @endphp
    <br> <br>
<div class="content" >
    <main role="main" class="container" >
        <div class="row">

            <div class="col-4 bg-primary">

                <h1 class="text-center py-5"></h1>
                      <img src="{{ asset($site->logo) }}" alt="">
                </p>
            </div>
            <div class="col-8 border border-dark">
                <img src="{{ asset('backend/images/bar.png') }}" style="width: 100%; height: 20%;" />
                <span style="align:centert">{{ $label->tracking_no }}</span>
                <h4>Order Information</h4>
                <p class="lead " >Tracking Number: <b>{{ $label->tracking_no }}</b></p>
                <p class="lead">Reference Number: <b>{{ $label->reference_no }}</b></p>
<hr>
                <div class="col-md-6">
                    <h4>Shipping To:</h4>
                <p>Name: <b>{{ $label->r_name }}</b></p>
                <p>Email: <b>{{ $label->r_email }}</b></p>
                <p>Country: <b>{{ $label->r_country }}</b></p>
                <p>Address: <b>{{ $label->r_address }}</b></p>
                </div>
                <hr>
                <div class="col-md-6">
                    <h4>Shipping From:</h4>
                <p>Name: <b>{{ $label->s_name }}</b></p>
                <p>Address: <b>{{ $label->s_address }}</b></p>
                </div>

                <hr>

                <div class="card bg-faded">
                    <div class="card-header">
                        <h4>Parcel Details:</h4>
                    </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Origin</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Shipping Type</th>
                            <th scope="col">Pick Up Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">{{ $label->product }}</td>
                            <td scope="row">{{ $label->origin }}</td>
                            <td scope="row">{{ $label->destination }}</td>
                            <td scope="row">{{ $label->type }}</td>
                            <td scope="row">{{ $label->pickup_date }}</td>
                            <td scope="row">{{ $label->status }}</td>
                        </tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>

    </main>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
