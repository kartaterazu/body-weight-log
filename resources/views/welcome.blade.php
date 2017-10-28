@extends('layout')

@section('title', 'Home')

@section('content')
@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif
<a class="btn btn-primary" href="/create">Create New Log</a>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Max</th>
                <th>Min</th>
                <th>Variance</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $rataMax = 0;
                $rataMin = 0;
                $rataVar = 0;
            
                foreach ($logs as $log)
                {
            ?>
                    <tr>
                        <td><?= $log->date; ?></td>
                        <td><?= $log->max; ?></td>
                        <td><?= $log->min; ?></td>
                        <td><?= $log->max - $log->min; ?></td>
                        <td>
                            <a class="btn btn-warning" href="/edit/<?= $log->id; ?>">Edit</a>
                            <a class="btn btn-info" href="/show/<?= $log->id; ?>">show</a>
                        </td>
                    </tr>
            <?php
                    $rataMax += $log->max;
                    $rataMin += $log->min;
                    $rataVar += $log->max - $log->min;
                }
            ?>
            
            <tr>
                <td>Average</td>
                <td><?= $rataMax / count($logs); ?></td>
                <td><?= $rataMin / count($logs); ?></td>
                <td><?= $rataVar / count($logs); ?></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection