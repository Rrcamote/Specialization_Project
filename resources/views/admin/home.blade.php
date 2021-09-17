@extends('layouts.app')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div align="right">
                    <button class="btn btn-primary " data-toggle="modal" data-target="#createModal"><i
                            class="glyphicon glyphicon-plus"></i>Add Massage</button>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#51abcb">
                                <h5 class="modal-title" id="createModalLabel">Add Massage</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body" style="background-color: #d3eaf2;">
                                <form action="/admin/create" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control form-control-lg" name="name"
                                            style="background-color: #134b5f; color: white;font-weight: bold;">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Image</label> <br>
                                        <input type="file" name="image" class="form-control form-control-lg"
                                            style="background-color: #134b5f; color: white;">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="rate" class="form-label">Rate</label>
                                        <input type="text" class="form-control form-control-lg" name="rate"
                                            style="background-color: #134b5f; color: white;font-weight: bold;">
                                    </div>
                                    <button class="btn btn-primary">Add</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-body">
                    <br>
                    @if(count($massages) != 0)
                    <table id="example1" class="table table-bordered dataTable no-footer" role="grid"
                        aria-describedby="example1_info">
                        <thead>
                            <tr class="text-center font-weight-bold">
                                <td>Massage Name</td>
                                <td>Image</td>
                                <td>Rate</td>
                            </tr>

                        </thead>
                        
                        @foreach($massages as $massage)
                        <tr class="text-center">

                            <td>{{$massage->name}}</td>
                            <td>
                                <img src="/storage/img/{{$massage->image}}" alt="" class="w-25">
                            </td>
                            <td>{{$massage->rate}} Php/ hour</td>
                        </tr>
                        @endforeach
                    </table>

                    @else
                        <h1>No Sulod</h1>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


@endsection