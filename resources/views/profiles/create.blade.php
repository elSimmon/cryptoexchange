@extends('layouts.app')
@section('content')
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    @if($profile ==null)
                                        <h3 class="text-danger">Please update your profile </h3>
                                    @else
                                    <div class="border-bottom text-center pb-4">

                                        <img src="{{asset('images/'.$profile->photo)}}" alt="profile" class="img-lg rounded-circle mb-3">
                                        <div class="mb-3">
                                            <h3>{{Auth::user()->name}}</h3>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <h5 class="mb-0 mr-2 text-muted">{{$profile->country}}</h5>
                                                <div class="br-wrapper br-theme-css-stars"><select id="profile-rating" name="rating" autocomplete="off" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2" class=""></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                            </div>
                                        </div>
                                        <p class="w-75 mx-auto mb-3">{{$profile->address}}</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success mr-1">Contact Me</button>
                                            <button class="btn btn-success">Follow</button>
                                        </div>
                                    </div>
                                    <div class="border-bottom py-4">
                                        <div class="d-flex mb-3">
                                            <div class="progress progress-md flex-grow">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="progress progress-md flex-grow">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4">
                                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                                            <span class="float-right text-muted">
                            Active
                          </span>
                                        </p>
                                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                                            <span class="float-right text-muted">
                            {{$profile->phone}}
                          </span>
                                        </p>
                                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                                            <span class="float-right text-muted">
                            {{\Illuminate\Support\Facades\Auth::user()->email}}
                          </span>
                                        </p>


                                    </div>
                                    <button class="btn btn-primary btn-block mb-2">Preview</button>
                                    @endif
                                </div>
                                <div class="col-md-8 grid-margin stretch-card">
{{--                                    <div class="col-md-6 grid-margin stretch-card">--}}
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">User Profile</h4>
                                                <p class="card-description">
                                                    Update your Profile
                                                </p>
                                                <form class="mb-6" method="POST" enctype="multipart/form-data" action="{{route('update-profile')}}">@csrf
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-sm-3 col-form-label">Profile photo</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="photo" class="form-control" id="photo" placeholder="Upload">

                                                            @error('photo')
                                                            <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nin" class="col-sm-3 col-form-label">National Identification Number (NIN)</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nin" class="form-control" id="nin" placeholder="NIN">

                                                            @error('nin')
                                                            <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobile number">

                                                            @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                             </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="address" class="col-sm-3 col-form-label">Contact Address</label>
                                                        <div class="col-sm-9">
                                                            <textarea type="password" class="form-control" id="address" name="address" placeholder="Contact Address"></textarea>

                                                            @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="state" class="col-sm-3 col-form-label">State</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" id="state" name="state">
                                                                <option disabled selected>--Select State--</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross Rive">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="FCT">Federal Capital Territory</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nasarawa">Nasarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                            </select>

                                                            @error('state')
                                                            <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="country" class="col-sm-3 col-form-label">Country</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control  @error('country') is-invalid @enderror" id="country" name="country">
                                                                <option disabled selected>Select Country</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                            </select>
                                                            @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
{{--                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}
                                                    <input type="submit" class="btn btn-block btn-primary mr3" value="Update Profile" />
                                                </form>
                                            </div>
                                        </div>
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
