@extends('layouts.app', ['title'=>'Batafsil'])

@section('content')

<section id="blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Kompaniya yangiliklari</h4>
                
            </div>
        </div>
        <div class="blog-grids row">
            
            <div>
                
                    <figure><img src="{{'/storage/'.$post->img }}" class="img-fluid" alt="{{$post->title}}"></figure>
                </a>
                <div class="blog-info">
                    <h3><a href="#">{{$post->title}}</a> </h3>
                    <ul>
                        <li><span class="fa fa-user-o mr-2"></span>Admin</li>
                        <li><span class="fa fa-eye mr-2"></span>{{$post->views}}</li>
                        <li><span class="fa fa-calendar mr-2"></span>{{$post->created_at->format('M:d, H:i')}}</li>
                    </ul>
                    <div class="blog-info ml-2 mr-2">
                        <h4>{{$post->content}}</h4>
                    </div>
                </div>
                
            </div>
            
            
            
        </div>
        
    </div>
</section>

@endsection