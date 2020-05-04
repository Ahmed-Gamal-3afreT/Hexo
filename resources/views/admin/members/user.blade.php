@extends('layouts.app')

@section('content')
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br><br><br>
<!--    
@foreach($users as $user)

<h2>{{$user->user_name}}<a href="{{url('member/delete',$user->id)}}">Delete</a></h2>

<p>{{$user->email}}</p>
@endforeach-->



<a class="btn btn-primary" href="{{url('member/deleted','{}')}}">Un Active</a>
<a class="btn btn-primary" href="{{url('member/deleted')}}">Send Message</a>
<a class="btn btn-primary" href="{{url('member/deleted')}}">Members Deleted</a>
<a class="btn btn-primary" href="{{url('member/deleted')}}">Members Deleted</a>

<form method="post" action="">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Status</th>
      <th scope="col">IMAGE</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Verified</th>
      <th scope="col">Active</th>
      <th scope="col">Created At</th>
      <th scope="col">Last Update</th>
      <th scope="col">Real Options</th>
      <th scope="col">Temporary options</th>
      
      
    </tr>
  </thead>
  <tbody>
   @foreach($users as $user)
   
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>
          
          <svg disabled class="bi bi-brightness-high" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 11a3 3 0 100-6 3 3 0 000 6zm0 1a4 4 0 100-8 4 4 0 000 8zM8 0a.5.5 0 01.5.5v2a.5.5 0 01-1 0v-2A.5.5 0 018 0zm0 13a.5.5 0 01.5.5v2a.5.5 0 01-1 0v-2A.5.5 0 018 13zm8-5a.5.5 0 01-.5.5h-2a.5.5 0 010-1h2a.5.5 0 01.5.5zM3 8a.5.5 0 01-.5.5h-2a.5.5 0 010-1h2A.5.5 0 013 8zm10.657-5.657a.5.5 0 010 .707l-1.414 1.415a.5.5 0 11-.707-.708l1.414-1.414a.5.5 0 01.707 0zm-9.193 9.193a.5.5 0 010 .707L3.05 13.657a.5.5 0 01-.707-.707l1.414-1.414a.5.5 0 01.707 0zm9.193 2.121a.5.5 0 01-.707 0l-1.414-1.414a.5.5 0 01.707-.707l1.414 1.414a.5.5 0 010 .707zM4.464 4.465a.5.5 0 01-.707 0L2.343 3.05a.5.5 0 11.707-.707l1.414 1.414a.5.5 0 010 .708z" clip-rule="evenodd"/>
</svg>
          
      </td>
      <td>{{$user->image}}</td>
      <td>{{$user->user_name}}</td>
      <td>{{$user->email}}</td>
      
      <td>
          @if($user->email_verified_at != null)
              <!--<input checked disabled type="checkbox"  name="chek">-->
          
          
          
          <svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
</svg>
          
          @else
          <!--<input disabled type="checkbox"  name="chek">-->
          
<svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
</svg>
          @endif
        
      </td>
      
      <td>
      
           @if($user->deleted_at == null)
             <!-- <input checked disabled type="checkbox"  name="chek">-->
<a href="{{url('member/delete',$user->id)}}">         
    <svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
    </svg>
</a>
          
          @else
             <!-- <input disabled type="checkbox"  name="chek">-->
             
<a href="{{url('member/restore',$user->id)}}">                 
    <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
      <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
    </svg>
</a>        
          @endif
          
      </td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td>
  <input type="checkbox"  name="{{$selected=$user->id}}" value="{{$user->id}}">
      </td>
      
      <td>
  <input type="checkbox"  name="{{$selected=$user->id}}" value="{{$user->id}}">
      </td>
    </tr>
   
   @endforeach
  </tbody>
</table>

</form>
<a class="btn btn-primary" href="{{url('member/deleted')}}">Members Deleted</a>
@endsection



