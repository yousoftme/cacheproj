@extends('layouts.app')
@section('content')
<div class="card w-50 m-auto">
    <div class="card-header">
        Add New Student
    </div>
    <div class="card-body">
        <form action="{{ url('student') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="roll_no">Roll No</label>
                <input type="text" class="form-control" name="roll_no" id="" placeholder="Roll No">
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="class_name">Class Name</label>
                <input type="text" class="form-control" name="class_name" id="" placeholder="Class Name">
            </div>
            <div class="form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control" name="school_name" id="" placeholder="School Name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add Student</button>
            </div>
        </form>
    </div>
</div>

@endsection
