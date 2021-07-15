
    <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <div class="card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    @include('partial.alerts')
                    <form action="{{route('comment',$book->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" >
                            <textarea class="form-control" name="comment" placeholder="Enter Your Comment"> </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="addcomment" class="btn btn-primary">Add Comment </button>
                         </div> 
                         <hr>
                         @if (count($book->comments) > 0)
                         @foreach($book->comments as $comment)
                              <div >
                                  <h5><span class="text-muted">{{$comment->user->name}} :<span> </h5>  
                                <span class="text-muted">{{$comment->created_at}}<span>
                                      <p>{{$comment->comment}}</p></span>
                               </div>
                               @endforeach
                               @endif

 

                
                
                </div>
        </div>
     </div>