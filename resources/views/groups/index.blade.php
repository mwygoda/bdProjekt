@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col-md-3">
      	@include('users.partials.profile-section')
  </div>
  <div id="center-column" class="col-md-6">
  <div class="users-list">
    <h3>my groups</h3>
    @foreach ($myGroups as $myGroup )
      <div class="media listed-object-close">
    <a href="groups/{{$myGroup->id}}">{{$myGroup->name}}</a>
    <div class="pull-right">
{{-- /// --}}

    </div>
  </div>
    @endforeach

    <h3>other groups</h3>
    @foreach ($groups as $group )

      <div class="media listed-object-close">
    <a href="groups/{{$group->id}}">{{$group->name}}</a>
    <div class="pull-right">
{{-- /// --}}
  <form method="post" action="joinGroup/{{$group->id}}">
    <button type="submit" class="btn btn-primary  btn-sm" >join group
    </button>
  </form>
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
