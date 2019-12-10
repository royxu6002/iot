@extends('layouts.default')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Invoices</span>
                <a href="{{ route('invoices.create') }}" class="btn btn-success pull-right">Create</a>
            </div>
        </div>
        <div class="panel-body">
            @if ($invoices->count())
                <table class="table table-striped">
                    <thead>
                        <th>Invoice No.</th>
                        <th>Grand Total</th>
                        <th>Client</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Created At</th>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->invoice_no }}</td>
                                <td>{{ $invoice->grand_total }}</td>
                                <td>{{ $invoice->client }}</td>
                                <td>{{ $invoice->due_date }}</td>
                                <td>{{ $invoice->created_at->diffForHumans() }}</td>
                                <td class="pull-right">
                                    <a href="{{ route('invoices.show', $invoice) }}">View</a>
                                    <a href="{{ route('invoices.edit', $invoice) }}">Edit</a>
                                    <form class="form-inline" action="{{route('invoices.destroy', $invoice)}}" method="POST" onsubmit="return confirm('Are you sure')">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $invoices->render() !!}
            @else
                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No invoices were created.
                        <a href="{{route('invoices.create')}}">Create now!</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
