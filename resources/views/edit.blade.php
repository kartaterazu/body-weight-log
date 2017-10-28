@extends('layout')

@section('title', 'Weight Log Edit')

@section('content')
<!-- /.row -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Weight Log Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/update/{{ $log->id }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <div class="form-group">
                                <input name="date" class="form-control" placeholder="Current Date" value="{{ $log->date }}">
                            </div>
                            <div class="form-group">
                                <input name="min" class="form-control" placeholder="Min" value="{{ $log->min }}">
                            </div>
                            <div class="form-group">
                                <input name="max" class="form-control" placeholder="Max" value="{{ $log->max }}">
                            </div>
                            
                            <button type="submit" class="btn btn-default">Update</button>
                            <a href="/" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection