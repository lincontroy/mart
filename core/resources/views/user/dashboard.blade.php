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
                                    {{ $greeting }}, {{ Auth::user()->username }}
                                </h4>

                                @if(Auth::user()->plan_id!=0)

                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="dropdown action-btn">
                                        <div class="action-btn">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-add"
                                                id="copyAffiliateLink">
                                                <i class="la la-plus"></i> Copy My Affiliate Link
                                            </a>
                                        </div>

                                    </div>


                                </div>

                                @else

                                

                                <a href="{{ url('user/packages') }}" class="alert-link">
                                    <div class="alert-icon-big alert alert-danger" role="alert">
                                        <div class="alert-icon">
                                            <span data-feather="layers"></span>
                                        </div>

                                        <div class="alert-content">
                                            <h6 class='alert-heading'>User not active</h6>
                                            <p>You need a package plan to proceed. Click here to select package</p>
                                        </div>
                                    </div>
                                </a>


                                            @endif
                </div>

            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1>Ksh {{ number_format(Auth::user()->balance, 2) }}
                            </h1>
                            <p>Deposit balance</p>
                            <div class="ap-po-details-time">
                                <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>25%</strong></span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="mychart8"></canvas>
                                </div>


                            </div>
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
                            <h1>Ksh {{ number_format(Auth::user()->total_ref_com, 2) }}</h1>
                            <p>Earning balance</p>
                            <div class="ap-po-details-time">
                                <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>25%</strong></span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="mychart9"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 End  -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 3 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1>Ksh
                                {{ number_format(App\Models\Withdrawal::where('user_id',Auth::user()->id)->sum('amount'),2) }}
                            </h1>
                            <p>Withdrawals</p>
                            <div class="ap-po-details-time">
                                <span class="color-danger"><i class="las la-arrow-down"></i>
                                    <strong>25%</strong></span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="mychart10"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 End -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1>Ksh 0.00</h1>
                            <p>WhatsApp Earnings</p>
                            <div class="ap-po-details-time">
                                <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>35%</strong></span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="mychart11"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 1 End -->
            </div>

            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>





                        <div class="overview-content">
                            <h1>
                                
                                <?php
                                
                            $package=Auth::user()->plan_id;

                            if($package==1){
                                $planname="Basic Package";
                            }else if($package==2){
                                $planname="Platinum Package";
                            }else{

                                $planname="Premium Ads Package";
                            }
                            ?>
                                
                              {{$planname}}
                            
                        </h1>
                            <p>Active Package</p>
                           
                        </div>

                    </div>
                </div>
                <!-- Card 1 End -->
            </div>


            <div class="col-xxl-6 mb-30">

                <div class="card broder-0">
                    <div class="card-header">
                        <h6>Total Revenue</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                <li>
                                    <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab"
                                        aria-selected="false">Week</a>
                                </li>
                                <li>
                                    <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab"
                                        aria-selected="false">Month</a>
                                </li>
                                <li>
                                    <a class="active" href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab"
                                        role="tab" aria-selected="true">Year</a>
                                </li>
                            </ul>
                            <div class="dropdown dropleft">
                                <a href="#" role="button" id="revenue1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="revenue1">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card-header -->
                    <div class="card-body pt-0">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                                aria-labelledby="tl_revenue-week-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">$72,848</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>$52,458</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="myChart6W"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                                aria-labelledby="tl_revenue-month-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">$72,848</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>$52,458</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="myChart6M"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel"
                                aria-labelledby="tl_revenue-year-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">$72,848</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>$52,458</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="myChart6"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card-body -->
                </div>

            </div>
            <div class="col-xxl-6 mb-30">

                <div class="card border-0">
                    <div class="card-header">
                        <h6>Recent transactions</h6>

                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="s_revenue-today" role="tabpanel"
                                aria-labelledby="s_revenue-today-tab">
                                <div class="table-responsive table-revenue">
                                    <table class="table table--default">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Amount</th>
                                                <th>Transaction ID</th>
                                                <th>Remarks</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                        $transactions=App\Models\Transaction::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
                                        
                                        ?>
                                            @foreach($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->id }}</td>
                                                    <td>{{ $transaction->amount }}</td>
                                                    <td>{{ $transaction->trx }}</td>
                                                    <td>{{ $transaction->remark }}</td>
                                                    <td>{{ $transaction->created_at }}</td>
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ends: .row -->
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
@endsection
