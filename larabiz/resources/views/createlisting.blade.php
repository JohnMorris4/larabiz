@extends('layouts.app')



@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing</div>

                <div class="panel-body">
                    <span ><a href="/dashboard" class="btn btn-primary btn-xs pull-right">Go Back</a></span>
                    {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST' ]) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Company Email']) }}
                    {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Company Phone']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Company Address']) }}
                    {{ Form::bsText('city', '', ['placeholder' => 'Company City']) }}
                    {{ Form::bsText('state', '', ['placeholder' => 'Company State']) }}
                    {{ Form::bsText('zipcode', '', ['placeholder' => 'Company Zip Code']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About the Business']) }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-danger  btn-lg btn-block'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>



@endsection