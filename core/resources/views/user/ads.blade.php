@extends('layouts.main')

@section('content')
<div class="contents">

    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                @php
                    $currentHour = date('H'); // Get the current hour (24-hour format)
                    
                    if ($currentHour >= 5 && $currentHour < 12) {
                        $greeting = 'Good Morning';
                    } elseif ($currentHour >= 12 && $currentHour < 18) {
                        $greeting = 'Good Afternoon';
                    } else {
                        $greeting = 'Good Evening';
                    }
                @endphp

                                <h4 class="text-capitalize breadcrumb-title">
                                    {{ $greeting }}, {{ Auth::user()->username }} <br> Welcome to ads center
                                </h4>





                                

                              
                </div>

            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1>
                                <?php
                                $total_ads=App\Models\Ads::where('user_id',Auth::user()->id)->sum('earnings');
                                ?>
                            Ksh {{ number_format($total_ads, 2) }}
                            </h1>
                            <p>Total ads revenue</p>
                            
                        </div>

                    </div>
                   
                </div>
                <!-- Card 1 End -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 2 End  -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1><?php

                                use Carbon\Carbon;

                                $total_ads=App\Models\Ads::where('user_id',Auth::user()->id)
                                ->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])
                                ->sum('earnings');
        
                                $whatsapp_with=App\Models\Withdrawal::where('user_id',Auth::user()->id)
                                ->where('withdraw_information', 'LIKE', '%whatsapp%')
                                ->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])
                                ->sum('amount');
                                
                                $active=$total_ads-$whatsapp_with
                               
                                ?>
                            Ksh {{ number_format($active, 2) }}
                        </h1>
                            <p> Active Balance</p>
                            
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#packageModal">
                           Withdraw earnings
                        </button>

                    </div>
                    
                </div>
                <!-- Card 2 End  -->
            </div>

            <div class="row">
                <?php

            
                $products=App\Models\Filestore::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])
                ->latest('created_at') // Orders by created_at in descending order
                ->first(); 

                
                ?>

@if($products)

               
    <!-- First Section -->
                <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                    <div class="card">
                        <div class="gc">
                            <div class="gc__img">
                                <img src="{{ url('img') }}/{{$products->file_two_path}}" alt="Product Image 1" class="w-100 radius-xl">
                            </div>
                            <div class="card-body px-25 py-20">
                                <div class="gc__title">
                                    <p>Product of the Day</p>
                                    <a href="{{ url('img') }}/{{$products->file_two_path}}" download="ad9.png" class="btn btn-info">Download Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                    <div class="card">
                        <div class="gc">
                            <div class="gc__img">
                                <img src="{{ url('img') }}/{{$products->file_two_path}}" alt="Product Image 1" class="w-100 radius-xl">
                            </div>
                            <div class="card-body px-25 py-20">
                                <div class="gc__title">
                                    <p>Product of the Day</p>
                                    <a href="{{ url('img') }}/{{$products->file_two_path}}" download="ad9.png" class="btn btn-info">Download Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @else

                <div class="card alert-warning text-center col-xxl-3 col-md-6 col-ssm-12 mb-30" role="alert">
   <h4 class="alert-heading">No Records Found</h4>
   <p>We couldn't find any records for today. Please check back later.</p>
</div>

@endif



               

</div>


            <div class="col-lg-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Submit views</h6>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form-wrapper">

                                        <form action="{{url('user/submit_views')}}" method="post">
                                            @csrf

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="form-basic">
                                                <input type="hidden" name="product_id" value="1">
                                                <div class="form-group mb-25">
                                                    <label>Phone</label>
                                                    <input class="form-control form-control-lg" type="text" name="phone" placeholder="your phone number" required>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>views</label>
                                                    <div class="input-container position-relative icon-right">
                                                        <a href="#" class="input-icon icon-right"><span data-feather="eye-off"></span></a>
                                                        <input class="form-control form-control-lg" type="text" name="views" placeholder="views" required>
                                                    </div>
                                                    <div class="form-inline-action d-flex justify-content-between align-items-center">

                                                    <div class="mb-3">
                                                        <label for="fileInput" class="form-label">File</label>
                                                        <input type="file" class="form-control" id="fileInput" name="file" required>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>


                            <div class="card-body p-0">

<div class="table4  p-25 bg-white mb-30">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <span class="userDatatable-title">id</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Amount</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Code</span>
                    </th>

                    <th>
                        <span class="userDatatable-title">Remarks</span>
                    </th>

                    

                    <th>
                        <span class="userDatatable-title">Status</span>
                    </th>

                    <th>
                        <span class="userDatatable-title">Created At</span>
                    </th>
                </tr>
            </thead>
            <tbody>

            <?php
            $withdrawals=App\Models\Withdrawal::where("user_id",Auth::user()->id)
            ->where('withdraw_information', 'LIKE', '%whatsapp%')
            ->orderBy("id","desc")->get();
            ?>

            @foreach($withdrawals as $withdrawal)

            <tr>

                <td>{{$withdrawal->id}}</td>
                <td>{{$withdrawal->amount}}</td>
                <td>{{$withdrawal->trx}}</td>
                <td>{{$withdrawal->withdraw_information}}</td>
                <td>
                    @if($withdrawal->status==2)
                        <span class="badge badge-warning">Pending</span>
                    @elseif($withdrawal->status==1)
                        <span class="badge badge-success">Completed</span>
                    @elseif($withdrawal->status==3)
                        <span class="badge badge-danger">Rejected</span>
                    @endif
                </td>

                <td>{{$withdrawal->created_at}}</td>
            </tr>

            @endforeach



            </tbody>
        </table>
    </div>
</div>
</div>
                            <!-- ends: .card -->

                        </div>
          
        </div>
        <!-- ends: .row -->
    </div>

</div>

<div class="modal fade" id="packageModal" tabindex="-1" aria-labelledby="packageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="packageModalLabel">Select Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('user/what') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="plan-amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="plan-amount" name="amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
        document.getElementById('copyAffiliateLink').addEventListener('click', function () {
            // Generate the affiliate link
            const baseUrl = "{{ url('user/') }}"; // Get the base URL of the site
            const referralCode = "{{ Auth::user()->username }}"; // Get user's referral code
            const affiliateLink = `${baseUrl}/register?ref=${referralCode}`;

            // Copy the link to the clipboard
            navigator.clipboard.writeText(affiliateLink).then(() => {
                // Show SweetAlert confirmation
                Swal.fire({
                    title: 'Success!',
                    text: 'Affiliate link copied to clipboard!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }).catch(err => {
                console.error('Failed to copy link: ', err);
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
