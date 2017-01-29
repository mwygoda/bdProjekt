@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col-md-3">
      	@include('users.partials.profile-section')
  </div>
  <div id="center-column" class="col-md-6">
  <div class="users-list">
    @foreach ($groups as $group )
      <div class="media listed-object-close">
    <a href="groups/{{$group->id}}">{{$group->name}}</a>
    <div class="pull-right">
    <a href="{!! url('groups') !!}" data-method="post" data-userid="{!! $user->id!!}" class="btn btn-primary add-friend-button btn-sm" role="button">join group</a>
    </div>
  </div>
    @endforeach
    {{-- {{$groups}}
  Groups goes here --}}
  </div>
</div>
  <div id="right-side-column" class="col-md-3">
    @include('friends.partials.friend-chat-list')
  </div>
</div>
@stop
