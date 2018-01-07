@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listings/create" class="btn btn-primary btn-xs">Add Listing</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome {{Auth::user()->name}}</h4>

                    <h3>Your Listings</h3>
                    @if(count($listings)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-primary pull-right">Edit Listing</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
