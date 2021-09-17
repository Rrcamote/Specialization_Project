@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        @if(count($schedules) > 0)
            <table class="table bg-dark text-white">
                <thead class="text-info text-center">
                    <th scope='col'>Massage Type</th>
                    <th scope='col'>Customer Name</th>
                    <th scope='col'>Hours</th>
                    <th scope='col'>Total</th>
                    <th scope='col'>Status</th>
                    <th scope='2'>Action</th>
                </thead>
                <tbody>
                    @foreach($schedules as $schedule)
                        <tr class="text-center">
                            <td>{{$schedule->massage->name}}</td>
                            <td>{{$schedule->user->name}}</td>
                            <td>{{$schedule->hours}} hours</td>
                            <td>{{$schedule->total}} php</td>
                            <td>
                                @if($schedule->status != 0)
                                    Done
                                @else
                                    Pending
                                @endif
                            </td>
                            <td>
                                @if($schedule->status != 1)
                                    <form action="/admin/confirm/{{$schedule->id}}" method="post">
                                        @csrf
                                        <button class="btn btn-primary">Done</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">
                No Schedules served
            </div>
        @endif

    </div>

@endsection