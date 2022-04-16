
@foreach($comments as $item)

    @if($item->parent_id ==null)
        <div class="comment-item">
            <div class="comment-author_img">
                @if($item -> user)
                    <img src="{{URL::to('/') . '/Profile/' . $item-> user ->name.'/'.$item-> user -> profile->image}}" alt="Image">

                @else
                    <img src="{{URL::to('/') . '/Profile/' . $item-> student ->name.'/'.$item-> student -> profile->image}}" alt="Image">

                @endif
            </div>
            <div class="comment-author_text">
                <div class="comment-author_info">
                    <h6>
                        @if($item -> user)
                            {{$item -> user -> name}}
                        @else
                        {{$item -> student -> name_ar}}
                        @endif
                    </h6>
                    <p>{{$item->created_at->diffforhumans()}}</p>
                </div>
                <p>{{$item -> desc}}</p>
                <form action="{{route('reply.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="desc">
                        <input type="hidden" class="form-control" name="blog_id" value="{{$blog_id}}">
                        <input type="hidden" class="form-control" name="parent_id" value="{{$item->id}}">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" >Reply</button>
                </form>
                @include("user.comment",['comments'=>$item->replies])
            </div>
        </div>
    @endif
    @if($item->parent_id !=null)
        <br>
        <div class="comment-item reply">
            <div class="comment-author_img">
                @if($item -> user)
                    <img src="{{URL::to('/') . '/Profile/' . $item-> user ->name.'/'.$item-> user -> profile->image}}" alt="Image">

                @else
                    <img src="{{URL::to('/') . '/Profile/' . $item-> student ->name.'/'.$item-> student -> profile->image}}" alt="Image">

                @endif            </div>
            <div class="comment-author_text">
                <div class="comment-author_info">
                    <h6> @if($item -> user)
                            {{$item -> user -> name}}
                        @else
                            {{$item -> student -> name_ar}}
                        @endif
                    </h6>
                    <p>{{$item->created_at->diffforhumans()}}</p>
                </div>
                <p>{{$item -> desc}}</p>
                <form action="{{route('reply.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="desc">
                        <input type="hidden" class="form-control" name="blog_id" value="{{$blog_id}}">
                        <input type="hidden" id="parent_id" class="form-control" name="parent_id" value="{{$item->id}}">
                    </div>
                    <button id="replay" class="btn btn-primary btn-sm" type="submit" >Reply</button>
                </form>

                @include("user.comment",['comments'=>$item->replies])
            </div>
        </div>
    @endif

@endforeach



