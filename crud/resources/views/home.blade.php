@extends('layouts.masterLayout')

@section('content')
    <div class="crud" id="create" onclick="location.href='{{ route('create') }}'">
        <h2>Create</h2>
        <p>Create new records in the database.</p>
    </div>
    <div class="crud" id="read" onclick="location.href='#'">
        <h2>Read</h2>
        <p>Retrieve and view existing records from the database.</p>
    </div>
    <div class="crud" id="update" onclick="location.href='#'">
        <h2>Update</h2>
        <p>Update existing records in the database.</p>
    </div>
    <div class="crud" id="delete" onclick="location.href='#'">
        <h2>Delete</h2>
        <p>Delete records from the database.</p>
    </div>
@endsection
