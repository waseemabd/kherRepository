@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{trans('Teachers/Teachers.Show User')}} </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}">{{trans('Teachers/Teachers.Back')}}</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{trans('Teachers/Teachers.name')}}:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{trans('Teachers/Teachers.email')}}:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{trans('Teachers/Teachers.Roles')}}:</strong>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection