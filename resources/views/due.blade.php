@extends('nav')
@section('content')
<div class="contact-container">
    <div class="header">
        <span>List of Tasks</span>
        <span class="close" onclick="window.location.href = 'dash';">&times;</span>
      </div>
    @foreach($taskNames as $taskName)
    <div class="user-list">
      <div class="user-row">
        <div class="profile-photo">
            <img src="{{url('images/icon.png')}}" alt="">
        </div>
        <div class="person-info">
          <li>{{ $taskName['name']}}</li>  
          <h5>{{$taskName['member']}}</h5>
          <p>Task Due: {{\Carbon\Carbon::createFromTimestamp(strtotime($taskName['due']))->diffForHumans() }}</p>
        </div>     
      </div>
    </div>
    @endforeach
  </div>
  @endsection