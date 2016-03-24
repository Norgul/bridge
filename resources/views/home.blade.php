@extends('layouts.app')
@section('content')
    @section('title')
        Dashboard, {{$date}}
        @endsection

    @section('inner_content')

        {!! Form::open(['url' => 'user']) !!}
            <!-- Add user to list Form Submit -->
            <div class="form-group">
                {!! Form::submit('Add user to list', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}

        @if($user_lists->exists())
            <ul class="list-group">
                @foreach($user_lists->users as $user)
                    <li class="list-group-item">{{$user->name}}</li>
                @endforeach
            </ul>
        @else
            No users on list yet
        @endif
        @endsection
    @include('layouts.inner_content')

@endsection
