@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-info text-light">
                <p class="card-title mb-0 text-light">Registered Users</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $record)
                            <tr>
                                <td style="max-width: 200px; min-width
:200px;">{{$record->name}}</td>
                                <td class="font-weight-bold">{{$record->email}}</td>
                                <td class="font-weight-bold">{{$record->created_at}}</td>
                                <td class="font-weight-medium">
                                    @switch($record->role)
                                        @case(0)
                                        <div class="badge badge-secondary">
                                            <p>Auth User</p>
                                        </div>
                                        @break

                                        @case(1)
                                        <div class="badge badge-danger">
                                            <p>Admin User</p>
                                        </div>
                                        @break

                                        @default
                                        <div class="badge badge-info">
                                            <p>Developer</p>
                                        </div>
                                    @endswitch
                                </td>
                                <td>
                                    @switch($record->role)
                                        @case(0)
                                        <a href="{{route('make-admin', [$record->id])}}" class="btn btn-sm btn-outline-danger">Make Admin</a>
                                        @break
                                        @default
                                        <a href="{{route('remove-admin', [$record->id])}}" class="btn btn-sm btn-outline-info">Remove Admin</a>
                                    @endswitch
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="" class="btn btn-sm btn-info text-pull-right">More...</a>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
