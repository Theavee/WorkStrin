@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Buyer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Question</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('buyer_post')}}" method="post">
                        @csrf
                        <div class="form-group">  
                            <label class="form-control-label">What's on your mind?</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Detail information about the post</label>
                            <input type="text" class="form-control form-control-lg" id="inputlg" name="detail" placeholder="Detail information about the post">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-submit" type="Submit">Submit</button>
                        </div>
                    </form>

                    
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <h3>{{$post->programmer->name}}</h3><br>
                            <h4>{{$post->title}}</h4><br>
                            <h5>{{$post->detail}}</h5><br>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
