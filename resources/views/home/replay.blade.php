@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h1>Replay</h1>
            <ul class="list-group">
                @foreach ($messages as $message)
                <li class="list-group-item mb-2" >
                    <p class="d-flex justify-content-between">Oglas: {{$message->ad->title}} <span class="d-inline-block ml-auto">{{$message->created_at->format('d M Y')}}</span></p>
                    <p>From: {{$message->sender->name}}</p>
                    <p><strong>{{$message->text}}</strong></p>
                    
                </li>
                @endforeach
                <li class="list-group-item">
                    <form action="{{route('home.replayStore')}}" method="post">
                        @csrf
                        <input type="hidden" name="sender_id" value="{{$sender_id}}">
                        <input type="hidden" name="ad_id" value="{{$ad_id}}">
                        <textarea name="msg" class="form-control" cols="30" rows="10"></textarea>
                        <button type="submit" class="form-control btn btn-primary">Replay</button>
                    </form>
                </li> 
            </ul>
        </div>
    </div>
</div>
@endsection