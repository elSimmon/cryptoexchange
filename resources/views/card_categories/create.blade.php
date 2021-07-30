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
                                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Card Types</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Add Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-add-types" role="tab" aria-controls="pills-contact" aria-selected="false">Add Card Type</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="template-demo">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th class="pl-0">Card name</th>
                                                <th class="text-right">Sub-types</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $item)
                                                <tr>
                                                    <td class="pl-0"><div class="badge badge-outline-primary badge-pill">
                                                        {{$item->name}} Gift Card</div></td>
                                                    <td class="pr-0 text-right"><div class="badge badge-outline-primary">count</div></td>
                                                    <td class="pr-0 text-right"><div class="badge badge-outline-danger">edit</div></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="media">
                                        <img class="mr-3 w-25 rounded" src="../../../../images/samples/300X300/10.html" alt="sample image">
                                        <div class="media-body">
                                            <p>I'm thinking two circus clowns dancing. You? Finding a needle in a haystack isn't hard when every straw is computerized. Tell him time is of the essence.
                                                Somehow, I doubt that. You have a good heart, Dexter.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('save-card-category')}}">@csrf
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Card Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="e.g Apple" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Card Image</label>
                                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-add-types" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="media">
                                        <img class="mr-3 w-25 rounded" src="../../../../images/samples/300x300/14.jpg" alt="sample image">
                                        <div class="media-body">
                                            <p>
                                                I'm really more an apartment person. This man is a knight in shining armor. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. You all right, Dexter?
                                            </p>
                                            <p>
                                                I'm generally confused most of the time. Cops, another community I'm not part of. You're a killer. I catch killers. Hello, Dexter Morgan.
                                            </p>
                                        </div>
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
