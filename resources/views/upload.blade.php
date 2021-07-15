
@extends('layouts.app')
@section('content')



      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <div class="card">
                <div class="card-header">Upload File</div>
                
                <div class="panel-body">
                   @include('partial.alerts')
                <form action="{{route('upload.save')}}"  method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <input type="text" name="author" id="author" placeholder="Enter Author" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <textarea  name="info" class="form-control" id="info" placeholder="Some Info on Book" ></textarea>
                    </div>
                    <div>
                        <select class="form-control" name="category">
                            @if (count($allcategories) > 0)
                                @foreach($allcategories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                      <input type="file" name="image" id="image"  class="form-control"/>
                    </div>
                    <div class="form-group">
                      <input type="file" name="book" id="book"  class="form-control"/>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="upload" id="title"  class="btn btn-primary btn-block">Upload Book</button>
                    </div>

                </form>
                










    
       
@endsection
