@extends('master')
@section('content')
    <h1>Show Sales Order</h1>
    <div class="row">
        <div class="col-md-6">
            {{ var_dump($salesOrder) }}
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Order Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $salesOrder->orderNumber }}</td>
                        <td>{{ $salesOrder->orderType }}</td>
                        <td>{{ $salesOrder->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
