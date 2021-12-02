@extends('backend.layouts')

@section('title')
    Add | Category
@endsection

@section('content')
    <div class="mb-5">
        <h2>Edit Category</h2>

        @if(session()->has('message'))
            <div class="text-center alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header text-center">
                Update New Category
            </div>
            <form action="{{ route('admin.category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <input type="hidden" name="id" id="" value="{{ $category->id }}">
                    <div class="form-group mb-2">
                        <label for="name">Name : </label>
                        <input class="form-control @error ('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $category->name }}" placeholder="Enter Category Name...">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status : </label>
                        <select class="form-control @error ('status') is-invalid @enderror" name="status" id="status">

                            <option @if($category->status == 'active') selected @endif value="active">Active</option>
                            <option @if($category->status == 'inactive') selected @endif value="inactive">Inactive</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <input class="mb-2 float-end btn btn-sm btn-primary" type="submit" name="update" id="update" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection

