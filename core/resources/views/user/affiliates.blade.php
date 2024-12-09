@extends('layouts.main')

@section('content')

<br><br>

<!-- Bootstrap JS Bundle (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="contents">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                        Affiliates

                        <div class="action-btn">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-add" id="copyAffiliateLink">
                                <i class="la la-plus"></i> Copy Link
                            </a>
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
                                                <span class="userDatatable-title">Name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>

                                            <th>
                                                <span class="userDatatable-title">Package</span>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $affs=User::where("ref_by",Auth::user()->id)->get();
                                    ?>
                                    @foreach($affs as $aff)
                                    <tr>
                                        <td>{{$aff->id}}</td>
                                        <td>{{$aff->username}}</td>

                                        <?php
                                        if($aff->plan_id==0){
                                           $status="Not active";
                                        }else{
                                            $status="Active";
                                        }
                                        ?>

                                        <?php
                                        if($aff->plan_id==1){
                                           $plan_name="Basic package";
                                        }else if($aff->plan_id==2){
                                            $plan_name="Basic package";
                                        }
                                        ?>
                                        
                                        <td>{{$status}}</td>
                                        <td>{{$status}}</td>

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
                <h5 class="modal-title" id="depositModalLabel">Withdraw Funds</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="depositForm">
                    <!-- Phone Number Input -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                            placeholder="Enter your phone number" required>
                    </div>

                    <!-- Amount Input -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                            placeholder="Enter the deposit amount" required>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitDeposit">Submit Deposit</button>
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


@endsection
