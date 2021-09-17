@extends('layouts.app')
    
@section('content')
    <div class="container d-flex flex-column text-dark bg-light">
        <div class="text-center">
            <h1>Pa Hilot Na</h1>
        </div>
        <div class="mt-3">
            <form action="/book/{{$massage->id}}" method = "post">
                @csrf
                <div class="mb-3 mx-auto w-50">
                    <label for="hours" class="form-label">Number of Hours</label>
                    <select name="hours" id="" class="form-control">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="mb-3 mx-auto w-50">
                    <label for="date" class="form-label">Scheduled Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Date">
                </div>
                <div class="mb-3 mx-auto w-50">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
