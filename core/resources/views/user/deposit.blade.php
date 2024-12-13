@extends('layouts.main')

@section('content')
<br><br>

<style>
        .warning-sign {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffcc00;
            color: #333;
            border: 2px solid #cc9900;
            border-radius: 10px;
            padding: 20px;
            font-family: Arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .warning-icon {
            font-size: 40px;
            color: #cc0000;
            margin-right: 15px;
        }

        .warning-text {
            flex: 1;
        }
    </style>

<!-- Bootstrap JS Bundle (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<div class="warning-sign">
    <span class="warning-icon">⚠️</span>
    <div class="warning-text">All payments are made to the methods provided by the . No payment should be made to individual numbers/bank paybills.</div>
</div>
<div class="contents">

    <div class="container-fluid">
        <div class="row">

        
            <div class="col-12">
                <div class="card">
               
                    <div class="card-header color-dark fw-500">
                        Deposits

                        <div class="action-btn" data-bs-toggle="modal" data-bs-target="#depositModal">
                            <a href="#" class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus"></i> Add New</a>
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
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $deposits=App\Models\Deposit::where("user_id",Auth::user()->id)
                                    ->orderBy("id","desc")
                                    ->get();
                                    ?>

                                    @foreach($deposits as $deposit)
                                        <tr>
                                            <td>{{$deposit->id}}</td>
                                            <td>{{$deposit->amount}}</td>
                                            <td>{{$deposit->trx}}</td>
                                            <td>
                                                @if($deposit->status==0)
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif($deposit->status==1)
                                                    <span class="badge badge-success">Success</span>
                                                @else
                                                    <span class="badge badge-danger">Rejected</span>
                                                @endif
                                            </td>
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
</div>


<!-- Deposit Modal -->
<div class="modal fade" id="depositModal" tabindex="-1" aria-labelledby="depositModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="depositModalLabel">Deposit Funds</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="depositForm" method="post" action="{{url('user/deposit/create')}}">
                    <!-- Phone Number Input -->

                    @csrf
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                        placeholder="0724555676" maxlength="10" pattern="[0-9]{10}" required>

                    </div>

                    <!-- Amount Input -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                            placeholder="Enter the deposit amount" required>
                    </div>

                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit Deposit</button>
            </div>
                </form>
            </div>

            <!-- Modal Footer -->
           
        </div>
    </div>
</div>

@endsection
