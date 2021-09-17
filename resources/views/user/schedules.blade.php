@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        @if(count($schedules) > 0)
        <table class="table bg-white text-dark">
            <thead>
                <th scope='col'>Massage Type</th>
                <th scope='col'>Hours</th>
                <th scope='col'>Total</th>
                <th scope='col'>Status</th>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                    <tr>
                        <td>{{$schedule->massage->name}}</td>
                        <td>{{$schedule->hours}} hours</td>
                        <td>{{$schedule->total}} php</td>
                        <td>
                            @if($schedule->status != 0)
                                Done
                            @else
                                Pending
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="alert alert-warning">
                No Schedules For Massage Yet
            </div>
        @endif
    </div>

@endsection