@extends('layouts.default')

@section('content')

  <div class="row">
    <div class="col-md-3">
        	@include('users.partials.profile-section')
    </div>
    <div id="center-column" class="col-md-6">
      <div class="text-center">
    <h2>{{$currentGroup->name}}</h2><h3>{{$currentGroup->grouptopic}}</h3>
     @foreach ($users as $user)
       <div class="media listed-object-close">
         <div class="pull-left">
           <a href="{!! url('/users/'.$user->id) !!}"><img class="media-object avatar medium-avatar" src="{!! $user->profileimage !!}" alt="{!! $user->firstname !!}"></a>
         </div>
         <div class="media-body">
           <h4 class="media-heading">{!! $user->firstname !!} {!! $user->lastname !!}</h4>
             </div>
           </div>

     @endforeach
    </div>
  </div>
    <div id="right-side-column" class="col-md-3">
      @include('friends.partials.friend-chat-list')
    </div>

</div>
  @stop
