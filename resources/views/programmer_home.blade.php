@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Programmer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('question')}}">Question</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Post Qualification</a>
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

                    <form action="{{ url('programmer_post')}}" method="post">
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
            </div>
        </div>
        <div class="col-md-8">
            @foreach($posts as $post)
                <h3>{{$post->buyer->name}}</h3><br>
                <h5>{{$post->title}}</h5><br>
                <h6>{{$post->detail}}</h6><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
