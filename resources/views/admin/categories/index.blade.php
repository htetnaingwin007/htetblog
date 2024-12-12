@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Posts</h1>
            <a href="{{route('backendcategories.create')}}" class="btn btn-primary float-end">
                Create Categories
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-post"><a href="{{route('backenddashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-post active">Categories</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories Lists
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>#</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php 
                            $i=1;
                        @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{$category->logo}}" alt="" width="50" height="50"></td>
                                
                                
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{$categories->links()}}
                </table>
            </div>
        </div>
        
    </div>
@endsection
