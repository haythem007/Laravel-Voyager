@extends('master')
@section('content')

<div class="row ">
    <div class="col-md-8">

        <h1>Blog</h1>
        @foreach($myposts as $post)
                <a href="{{url('/post/'.$post->slug)}}">
                 <div class="card">
                     <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt=""></a>
                <div class="card-body">
                <h4 class="card-title">  <a href="{{url('/post/'.$post->slug)}}">{{$post->title}}</a></h4>
                 <p class="card-text">{{ str_limit($post->excerpt) }}</p>
                 <span class="badge badge-primary">{{ $post->category_id}}</span>
            </div>

             </div>
            
         @endforeach
       
    </div>
    <div class="col-md-4">
        <h2>Our List Of Categories</h2>
        <ul class="list-group">
                <li  @if(!$id) active @endif class="list-group-item" ><a class="list-group-item-action" href="{{url('/blog')}}">ALL</a></li>
            @foreach($mycategories as $category)
            <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center @if($category->id == $id) active @endif">
                            <a class="list-group-item-action" href="{{url('/blog/'.$category->id)}}">{{$category->name}}</a>
                      <span class="badge badge-primary badge-pill">{{$category->posts->count()}}</span>
                    </li>
                  </ul>
          
            @endforeach
        </ul>    
    </div>

</div>
<div class="pagination">
    {{$myposts->links()}}
</div>
@endsection