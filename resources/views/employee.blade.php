@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Complete Information</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee/'.$emp->id.'') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Company Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="company_name" value="{{ $emp->company_name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="address" value="{{ $emp->address }}"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Website</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="website" value="{{ old('website') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="phone" value="{{$emp->phone}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop