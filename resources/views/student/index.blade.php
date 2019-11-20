@extends('layouts.app')
@section('content')
<a class="btn btn-primary" href="http://localhost:81/cacheProject/public/student/create">create</a>
<div class="card">
    <div class="card-header">
        Students List
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Roll #</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Class Name</th>
                    <th>School Name</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= $id; $i++)
                <tr>
                    <td>{{ $student['roll_no'.$i] }}</td>
                    <td>{{ $student['first_name'.$i] }}</td>
                    <td>{{ $student['last_name'.$i] }}</td>
                    <td>{{ $student['class_name'.$i] }}</td>
                    <td>{{ $student['school_name'.$i] }}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
