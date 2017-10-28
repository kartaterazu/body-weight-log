@extends('layout')

@section('title', 'Weight Log {{ $log->date }}')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Weight Log {{ $log->date }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>:</th>
                                        <th>{{ $log->date }}</th>
                                    </tr>
                                    <tr>
                                        <th>Max</th>
                                        <th>:</th>
                                        <th>{{ $log->max }}</th>
                                    </tr>
                                    <tr>
                                        <th>Min</th>
                                        <th>:</th>
                                        <th>{{ $log->min }}</th>
                                    </tr>
                                    <tr>
                                        <th>Variance</th>
                                        <th>:</th>
                                        <th>{{ $log->max - $log->min }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <a class="btn btn-primary" href="/">Back</a>
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