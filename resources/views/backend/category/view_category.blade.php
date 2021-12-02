@extends('backend.layouts')

@section('title')
    View | Category
@endsection

@section('content')
    <div class="mb-5" style="min-height: 60vh">
        <h2 class="">Single Category</h2>

        <div class="">
            <table class="table">
                <tr>
                    <th>SL No : &nbsp; </th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Name : &nbsp; </th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Slug : &nbsp; </th>
                    <td>{{ $category->slug }}</td>
                </tr>
                <tr>
                    <th>Status : &nbsp; </th>
                    <td>{{ $category->status }}</td>
                </tr>
            </table>
        </div>
        <button class="btn btn-danger d-print-none" onclick="window.print()">Print</button>
    </div>
@endsection
