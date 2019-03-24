@extends('layouts.adminpanel')

<?php
?>
@section('content')

    <h2 align="center">Работодатели</h2>

    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">id_employer</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Company</th>
                <th scope="col">Description</th>
                <th scope="col">Vacancy</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Действия</th>
                @foreach($employers as $e)
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$e->id}}</th>
                <td>{{$e->id_employer}} </td>
                <td>{{$e->name_employer}}</td>
                <td>{{$e->surname_employer}}</td>
                <td>{{$e->company_name}}</td>
                <td>{{$e->description}}</td>
                <td>{{$e->vacancy}}</td>
                <td>{{$e->created_at}}</td>
                <td>{{$e->updatedted_at}}</td>
                <td>
                    <form action="{{ url('/admin'.$e->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" id="delete-task-{{ $e->id }}" class="btn btn-default">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                    <hr>
                    <form action="{{ url('/admin'.$e->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('EDIT') }}

                        <button type="submit" id="edit-task-{{ $e->id }}" class="btn btn-default">
                            <i class="fa fa-btn fa-trash"></i>EDIT
                        </button>
                    </form>
                </td>
            </tr>

            </tbody>
            @endforeach
        </table>

    </div>
    <br>
    <h2 align="center">Соискатели</h2>

    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Действия</th>
                @foreach($users as $u)
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$u->id}}</th>
                <td>{{$u->name}} </td>
                <td>{{$u->email}}</td>
                <td>{{$u->created_at}}</td>
                <td>{{$u->updated_at}}</td>
                <td>
                    <form action="{{ url('/admin'.$e->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" id="delete-task-{{ $e->id }}" class="btn btn-default">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>

                    <form action="{{ url('/admin'.$e->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('EDIT') }}

                        <button type="submit" id="edit-task-{{ $e->id }}" class="btn btn-default">
                            <i class="fa fa-btn fa-trash"></i>EDIT
                        </button>
                    </form>
                </td>
            </tr>

            </tbody>
            @endforeach
        </table>

    </div>

    <div class="line"></div>

    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>

@endsection


