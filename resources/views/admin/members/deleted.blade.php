@extends('layouts.app')

@section('content')

@foreach($users as $user)

<h2>{{$user->user_name}}<a href="{{url('member/restore',$user->id)}}">Restore</a></h2>

<p>{{$user->email}}</p>
@endforeach


<a class="btn btn-primary" href="{{url('members')}}">Members</a>
@endsection
