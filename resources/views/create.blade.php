@extends('layout')

@section('title', 'Weight Log Input')

@section('content')
<!-- /.row -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Weight Log Input
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/save" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <div class="form-group">
                                <input name="date" id="date" class="form-control" placeholder="Current Date" required="required">
                            </div>
                            <div class="form-group">
                                <input name="min" class="form-control" placeholder="Min" required="required">
                            </div>
                            <div class="form-group">
                                <input name="max" class="form-control" placeholder="Max" required="required">
                            </div>
                            
                            <button type="submit" class="btn btn-default">Save</button>
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

@section('script')
<script type="text/javascript">
    $(function(){
        $( "#date" ).datepicker({"dateFormat": "yy-mm-dd"});
    });
</script>
@endsection