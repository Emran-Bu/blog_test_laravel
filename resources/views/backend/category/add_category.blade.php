@extends('backend.layouts')

@section('title')
    Add | Category
@endsection

@section('content')
    <div class="mb-5">
        <h2>Add Category</h2>

        @if(session()->has('message'))
            <div class="text-center alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header text-center">
                Create New Category
            </div>
            <form action="{{ route('admin.category.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="name">Name : </label>
                        <input class="form-control @error ('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Category Name...">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group my-3">
                        <label for="slug">Slug : </label>
                        <input class="form-control" type="text" name="slug" id="slug" placeholder="Enter Slug...">
                    </div> --}}
                    <div class="form-group">
                        <label for="status">Status : </label>
                        <select class="form-control @error ('status') is-invalid @enderror" name="status" id="status">
                            <option disabled selected>Select Status &gt;&gt;</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <input class="mb-2 float-end btn btn-sm btn-primary" type="submit" name="save" id="save" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection

