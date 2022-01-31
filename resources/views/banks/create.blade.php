@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
            <div class="row grid-margin">
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bank Details</h4>
                            <form class="cmxform" id="commentForm" method="POST" action="{{route('update-bank-details')}}" novalidate="novalidate">@csrf
                                <fieldset>
                                    <div class="form-group has-danger">
                                        <label for="name">Bank Name (required)</label>
                                        <select class="form-control form-control-danger" name="name" id="name">
                                            <option value="">Choose Bank</option>
                                            <option value="access">Access Bank</option>
                                            <option value="citibank">Citibank</option>
                                            <option value="diamond">Diamond Bank</option>
                                            <option value="ecobank">Ecobank</option>
                                            <option value="fidelity">Fidelity Bank</option>
                                            <option value="firstbank">First Bank</option>
                                            <option value="fcmb">First City Monument Bank (FCMB)</option>
                                            <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                            <option value="heritage">Heritage Bank</option>
                                            <option value="keystone">Keystone Bank</option>
                                            <option value="polaris">Polaris Bank</option>
                                            <option value="providus">Providus Bank</option>
                                            <option value="stanbic">Stanbic IBTC Bank</option>
                                            <option value="standard">Standard Chartered Bank</option>
                                            <option value="sterling">Sterling Bank</option>
                                            <option value="suntrust">Suntrust Bank</option>
                                            <option value="union">Union Bank</option>
                                            <option value="uba">United Bank for Africa (UBA)</option>
                                            <option value="unity">Unity Bank</option>
                                            <option value="wema">Wema Bank</option>
                                            <option value="zenith">Zenith Bank</option>
                                        </select>
                                        <label id="name-error" class="error mt-2 text-danger" for="name">This field is required.</label>
                                    </div>
                                    <div class="form-group has-danger">
                                        <label for="name">Account Type (required)</label>
                                        <select class="form-control form-control-danger" name="account_type" id="account_type">
                                            <option value="">Choose Account Type</option>
                                            <option value="savings">Savings</option>
                                            <option value="current">Current</option>
                                            <option value="domiciliary">Domiciliary</option>
                                        </select>
                                        <label id="account_type-error" class="error mt-2 text-danger" for="account_type">This field is required.</label>
                                    </div>
                                    <div class="form-group has-danger">
                                        <label for="account_number">Account Number (required)</label>
                                        <input id="account_number" class="form-control form-control-danger" type="text" maxlength="10" name="account_number" required=""><label id="account_number-error" class="error mt-2 text-danger" for="account_number">This field is required.</label>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="bvn">BVN (optional)</label>--}}
{{--                                        <input id="bvn" class="form-control valid" type="text" name="bvn">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="swift_code">SWIFT CODE (optional)</label>--}}
{{--                                        <input id="swift_code" class="form-control valid" type="text" name="swift_code">--}}
{{--                                    </div>--}}
                                    <input class="btn btn-primary btn-block" type="submit" value="Add Bank">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="card-title">My Bank Accounts</h4>
                            <table class="table table-responsive table-info table-striped">
                                <thead>
                                <th>Bank Name</th>
                                <th>Account Type</th>
                                <th>Account Number</th>
{{--                                <th>Actions</th>--}}
                                </thead>
                                <tbody>
                                @foreach($banks as $bank)
                                <tr>
                                    <td>{{$bank->name}}</td>
                                    <td>{{$bank->account_type}}</td>
                                    <td>{{$bank->account_number}}</td>
{{--                                    <td><a class="btn btn-sm btn-danger" href="{{route('remove-bank', [$bank->id])}}">remove</a> </td>--}}
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
