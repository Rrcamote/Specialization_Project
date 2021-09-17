@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(count($massages) > 0)
                @foreach($massages as $massage)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center">{{$massage->name}}</h2>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="/storage/img/{{$massage->image}}" class="w-50">
                                </div>
                                <div class="">{{$massage->rate}} php/hour</div>
                                <br>
                                <div><a href="user/create/{{$massage->id}}" type="button" class="btn btn-primary btn-block pb-2">Book</a></div>    
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">
                    No Massages Available
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-center">
            {{ $massages->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection