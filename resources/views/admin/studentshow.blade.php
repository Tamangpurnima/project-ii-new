@extends('layouts.admin')
@section('content')
<div class="container">
<div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Passed Year</th>
                <th>Previous school/College</th>
                <th>GPA</th>
                <th>Interest</th>
                <th>Goal</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($student as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->contact}}</td>
                <td>{{$student->image}}</td>
                <td>{{$student->passedyear}}</td>
                <td>{{$student->previousschool}}</td>
                <td>{{$student->gpa}}</td>
                <td>{{$student->interest}}</td>

                <td><a href="/student/delete/{{$student->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/student/edit/{{$student->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>   
</div>
@endsection