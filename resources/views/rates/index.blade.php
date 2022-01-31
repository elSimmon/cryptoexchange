@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Exchange rates and Currencies</h4>
                        <p class="card-description">Add Exchange rates and the specified currencies.</p>
                        <ul class="nav nav-pills nav-pills-info" id="pills-tab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-add-types" role="tab" aria-controls="pills-contact" aria-selected="false">Static/Fixed Rates</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-add-types" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="media">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th class="pl-0">From</th>
                                            <th class="pl-0">To</th>
                                            <th class="pl-0">Rate</th>
                                            <th class="pl-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rates as $item)
                                            <tr>
                                                <td class="pl-0">
                                                    <div class="badge badge-outline-primary badge-pill">
                                                        {{$item->from}}
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <div class="badge badge-outline-primary badge-pill">
                                                        {{$item->to}}
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <div class="badge badge-outline-primary badge-pill">
                                                        <span style="text-decoration: line-through;">N</span> {{$item->rate}}
                                                    </div>
                                                </td>
                                                <td class="pl-0"><div class="badge badge-outline-danger"><a href="{{route('edit-rate', $item->id)}}">Edit</a></div></td>
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
        <div class="row">
            <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rates Form</h4>
                        <form class="form-inline" method="POST" action="{{route('add-rate')}}">@csrf
                            <label class="sr-only" for="inlineFormInputGroupUsername2">From</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">From</div>
                                </div>
                                <input type="text" name="from" class="form-control" id="inlineFormInputGroupUsername2" placeholder="USD">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroupUsername2">To</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">To</div>
                                </div>
                                <input type="text" name="to" class="form-control" id="inlineFormInputGroupUsername2" placeholder="NGN">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroupUsername2">Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rate</div>
                                </div>
                                <input type="text" name="rate" class="form-control" id="inlineFormInputGroupUsername2" placeholder="500">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
