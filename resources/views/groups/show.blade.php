@extends('layouts.default')

@section('content')

  <div class="row">
    <div class="col-md-3">
        	@include('users.partials.profile-section')
    </div>
    <div id="center-column" class="col-md-6">
      <div class="text-center">
    <h2>{{$currentGroup->name}}</h2><h3>{{$currentGroup->grouptopic}}</h3>  
    </div>
  </div>
    <div id="right-side-column" class="col-md-3">
      @include('friends.partials.friend-chat-list')
    </div>

</div>
  @stop
