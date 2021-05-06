@extends('layouts.app')

@section('content')

<h1 class="text-centerv my-5">Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit Todo</div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="todo_id value="{{ $todo->id }}"> --}}
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name" value="{{ $todo->name }}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection