@extends('layouts.app')

@section('content')
<div class="container bg-white" style="background-size: cover; border-radius: 8px;">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/massage.png" class="w-100 rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex align-items-center pb-4">
                <h1>{{ $user->name }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> Types</div>
                <div class="pr-5"><strong>24/7</strong> Services</div>
                <div class="pr-5"><strong>1000</strong> Customers</div>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <table id="example1" class="table table-bordered dataTable no-footer" role="grid"
                        aria-describedby="example1_info">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            <tr class="text-center">
                                <td>1</td>
                                <td>Swedish Massage</td>
                                <td><img src="/img/swedish.png"></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary  emp_edit" id="">Book Now</button>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Swedish Massage</td>
                                <td><img src="/img/swedish.png"></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary  emp_edit" id="">Book Now</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection