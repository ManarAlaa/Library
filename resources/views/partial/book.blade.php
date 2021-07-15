

@extends('layouts.app')
@section('content')



      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <div class="card">
                <div class="card-header">{{$book->category->name}}</div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"/>
                    </div>
                    <div class="col-md-9 text-center">
                        <h2>{{$book->title}}</h2>
                        <p>{{$book->info}}</p>
                        <br/>
                        Author : {{$book->author}} <br/>
                        <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                        
                    </div>
                </div>
<hr>

                
@include('partial/commentbox')
       
@endsection
