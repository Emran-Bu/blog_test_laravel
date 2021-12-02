@extends('backend.layouts')

@section('title')
    Manage | Category
@endsection

@section('content')
    <div class="mb-5">
        <h2>Manage Category</h2>
        @if(session()->has('message'))
            <div class="my-3 text-center alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif
        <div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ ucfirst($category->status) }}</td>
                        <td class="d-flex justify-content-center">
                            <div>
                                <a class="btn-sm btn btn-primary me-2" href="{{ route('admin.category.show', $category->id) }}">View</a>
                            </div>
                            <div>
                                <a class="btn btn-sm btn-success me-2" href="{{ route('admin.category.edit', $category->id) }}">Edit</a>
                            </div>
                            <form action="{{ route('admin.category.destroy', $category->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="form-group">
                                    <input class="btn btn-danger btn-sm" type="submit" name="delete" value="delete" id="delete">
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection

<style>
    .w-5{
        height: 15px
    }
</style>
