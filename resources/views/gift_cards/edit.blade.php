@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Giftcard</h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{route('update-gift-card', [$giftcard->id])}}">@csrf
                            @method('put')
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
                                    <option value="{{$giftcard->country}}">{{$giftcard->country}}</option>
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
                                    <option value="{{$giftcard->type}}">Cash Receipt</option>
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
                                <input type="text" class="form-control" id="denomination" name="denomination" value="{{$giftcard->denomination}}" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="denomination">Min (U$D)</label>
                                        <input type="text" class="form-control" id="denomination" name="min" value="{{$giftcard->min}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="denomination">Max (U$D)</label>
                                        <input type="text" class="form-control" id="denomination" name="max" value="{{$giftcard->max}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rate">Rate (<span
                                            style="text-decoration: line-through;">N</span>)</label>
                                <input type="text" class="form-control" id="rate" name="rate" value="{{$giftcard->rate}}">
                            </div>

                            <button type="submit" class="btn btn-info mr-2">Update Card</button>
                            <button class="btn btn-danger">Clear Input</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
