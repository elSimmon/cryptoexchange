@extends('layouts.app')
@section('content')
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card Categories</h4>
                            <p class="card-description">Add Card Categories here e.g. Amazon Card</p>
                            <ul class="nav nav-pills nav-pills-info" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Gift Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add Gift Card Types</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Add Gift Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-add-types" role="tab" aria-controls="pills-contact" aria-selected="false">All Card Type</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="template-demo">
                                        <table class="table mb-0 table-striped table-compact">
                                            <thead class="bg-info text-white">
                                            <tr>
                                                <th class="pl-0">Card name</th>
                                                <th class="">Sub-types</th>
                                                <th class="" colspan="2">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $item)
                                                <tr>
                                                    <td class="pl-0"><div class="badge badge-outline-primary badge-pill">
                                                        {{$item->name}} Gift Card</div></td>
                                                    <td class="pr-0 "><div class="badge badge-outline-primary">{{$item->giftcards()->count()}}</div></td>
                                                    <td class="pr-0 "><a class="btn-outline-info btn btn-sm " href="{{route('edit-card-category', [$item->id])}}">edit</a></td>
                                                    <td class="pr-0 "><a href="{{route('remove-card-category', [$item->id])}}" class="btn btn-outline-danger btn-sm">remove</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="media">
                                        <img class="mr-3 w-25 rounded" src="{{asset('images/bank-card.png')}}" alt="sample Card">
                                        <div class="media-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Add Card Types</h4>
                                                    <p class="card-description">
                                                        Add a card type to Card Category, e.g physical card
                                                    </p>
                                                    <form class="forms-sample" method="POST" action="{{route('save-gift-card')}}">@csrf
                                                        <div class="form-group">
                                                            <label for="category">Category</label>
                                                            <select id="category" class="form-control" name="card_category_id" required>
                                                                <option value="">Choose from existing cards</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <select id="country" name="country" class="form-control" required>
                                                                <option value="">Choose Country</option>
                                                                <option value="USA">USA</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Russia">Russia</option>
                                                                <option value="UK">UK</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="European Union">European Union</option>
                                                                <option value="Singapore">Singapore</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="card_type">Card Type</label>
                                                            <select id="card_type" name="card_type" class="form-control" required>
                                                                <option value="">Choose a type</option>
                                                                <option value="Cash Receipt">Cash Receipt</option>
                                                                <option value="Credit Receipt">Credit Receipt</option>
                                                                <option value="Debit Receipt">Debit Receipt</option>
                                                                <option value="Activation Receipt">Activation Receipt</option>
                                                                <option value="Large Card">Largee Card</option>
                                                                <option value="E-code">E-code</option>
                                                                <option value="No Receipt">No Receipt</option>
                                                                <option value="Physical Card">Physical Card</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="denomination">Denomination (U$D)</label>
                                                            <input type="text" class="form-control" id="denomination" name="denomination" placeholder="100 - 500" required>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="denomination">Min (U$D)</label>
                                                                    <input type="text" class="form-control" id="denomination" name="min" placeholder="20" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="denomination">Max (U$D)</label>
                                                                    <input type="text" class="form-control" id="denomination" name="max" placeholder="100" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rate">Rate (<span
                                                                    style="text-decoration: line-through;">N</span>)</label>
                                                            <input type="text" class="form-control" id="rate" name="rate" placeholder="500">
                                                        </div>

                                                        <button type="submit" class="btn btn-info mr-2">Save Card</button>
                                                        <button class="btn btn-danger">Clear Input</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('save-card-category')}}">@csrf
                                        <div class="form-group">
                                            <label for="name">Card Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="e.g Apple" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Card Image</label>
                                            <input type="file" name="image" class="form-control" id="image" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-add-types" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="media table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th class="pl-0">Card name</th>
                                                <th class="pl-0">Sub-type</th>
                                                <th class="pl-0">Country</th>
                                                <th class="pl-0">Denomination</th>
                                                <th class="pl-0">Rate</th>
                                                <th class="pl-0">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cards as $item)
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="badge badge-outline-primary badge-pill">
                                                            {{$item->card_category->name}}
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-outline-primary badge-pill">
                                                            {{$item->country}}
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-outline-primary badge-pill">
                                                            {{$item->type}}
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-outline-primary badge-pill">
                                                          $  {{$item->denomination}}
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-outline-primary badge-pill">
                                                           <span style="text-decoration: line-through;">N</span> {{$item->rate}}
                                                        </div>
                                                    </td>
                                                    <td class="pl-0"><div class="badge badge-outline-danger"><a href="{{route('remove-gift-card', [$item->id])}}">remove</a></div></td>
                                                    <td class="pl-0"><div class="badge badge-outline-success"><a href="{{route('edit-gift-card', [$item->id])}}">edit</a></div></td>
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
        <!-- content-wrapper ends -->
@endsection
