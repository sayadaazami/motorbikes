@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="{{route('motorbike_create_submit')}}" method="post" enctype="multipart/form-data"
                              class="form">

                            {{csrf_field()}}

                            <div class="form-group col-md-6">
                                <lable>CC</lable>
                                <input type="number" name="cc" id="cc" color="cc" min="100" max="500" value="100"
                                       step="5" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <lable>Color</lable>
                                <select name="color" id="color" class="form-control">
                                    <option>Red</option>
                                    <option>Blue</option>
                                    <option>Green</option>
                                    <option>Brown</option>
                                    <option>Yellow</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <lable>Weight</lable>
                                <input type="number" name="weight" id="weight" min="50" max="500" value="50" step="5"
                                       class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <lable>Weight</lable>
                                <input type="number" name="price" id="price" min="1000000" max="500000000"
                                       value="1000000" step="500"
                                       class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <lable>Image</lable>
                                <input type="file" name="image" id="image" accept="image/*" class="form-control">
                            </div>

                            <div class="clearfix"></div>

                            <div>
                                <hr>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
