@extends('layouts.app')



@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing</div>

                <div class="panel-body">
                    <span ><a href="/dashboard" class="btn btn-primary btn-xs pull-right">Go Back</a></span>
                    {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method' => 'POST' ]) !!}
                    {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', $listing->email, ['placeholder' => 'Company Email']) }}
                    {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Company Phone']) }}
                    {{ Form::bsText('address', $listing->address, ['placeholder' => 'Company Address']) }}
                    {{ Form::bsText('city', $listing->city, ['placeholder' => 'Company City']) }}
                    {{ Form::bsText('state', $listing->state, ['placeholder' => 'Company State']) }}
                    {{ Form::bsText('zipcode', $listing->zipcode, ['placeholder' => 'Company Zip Code']) }}
                    {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About the Business']) }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-danger  btn-lg btn-block'])}}
                    {{ Form::hidden('_method', 'PUT') }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>



@endsection