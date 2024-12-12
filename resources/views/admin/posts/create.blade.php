@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Posts</h1>
            <a href="{{route('backendposts.create')}}" class="btn btn-primary float-end">
                Create Posts
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backenddashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('backenddashboard')}}">Posts</a></li>
            
            <li class="breadcrumb-item active">Create Posts</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Post Lists
            </div>
            <div class="card-body">
                <form action="{{route('backendposts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="codeno" class="form-label">Id</label>
                        <input type="text" class="form-control" id="codeno" name="id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input type="text" class="form-control" id="name" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" aria-label="Upload" name="image">
                        
                    </div>
                    <div class="mb-3">
                        <div class="">
                            <label for="description" class="form-label">Descriptions</label>
                            <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
                        </div>
                    </div>  

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category_id">
                            <option value="" selected>Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Users</label>
                        <select class="form-select" id="user" name="user_id">
                            <option value="" selected>Choose Users</option>
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 row mx-1">
                        <button class="btn btn-lg btn-primary">Save</button>
                    </div>
                    </form>
            </div>
        </div>
        
    </div>
    <div>

    </div>
@endsection