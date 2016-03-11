@extends('master')
@section('content')
    <h1>Sales Order Index</h1>
    <div class="col-md-6">
        {{ var_dump($salesOrders) }}
    </div>
    <div class="col-md-6">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Order Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($salesOrders as $salesOrder)
                    <tr>
                        <td>{{ $salesOrder->orderNumber }}</td>
                        <td>{{ $salesOrder->orderType }}</td>
                        <td>{{ $salesOrder->status }}</td>
                        <td>
                            <a href="{{ route('salesorder.show', $salesOrder->orderNumber) }}" class="btn btn-default btn-xs">
                                Details
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td col="4">Sorry, No Sales Orders Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
