@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <form action="{{route('home.saveAd')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <textarea name="body" cols="30" rows="10" class="form-control"></textarea><br>
                <input type="number" name="price" class="form-control" placeholder="price"><br>
                <input type="file" name="image1" class="form-control mb-1">
                <input type="file" name="image2" class="form-control mb-1">
                <input type="file" name="image3" class="form-control mb-1"><br>
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select><br>
                <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
        </div>
    </div>
</div>
@endsection
