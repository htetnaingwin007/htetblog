@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Posts</h1>
            <a href="" class="btn btn-primary float-end">
                Create Posts
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-post"><a href="{{route('backenddashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-post active">Posts</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Post Lists
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Name</th>
                            
                            <th>Description</th>
                            <th>Category</th>
                            <th>User</th>
                            <th>#</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Name</th>
                            
                            <th>Description</th>
                            <th>Category</th>
                            <th>User</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php 
                            $i=1;
                        @endphp
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
        
    </div>
@endsection
