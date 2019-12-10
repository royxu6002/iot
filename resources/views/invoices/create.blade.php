@extends('layouts.default')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-cloak>
            <div class="panel-heading">
                <div class="clearfix row">
                    <span class="panel-title">Create Invoice</span>
                    <div class="pull-right btn-alert">
                        <a href="{{ route('invoices.index') }}" class="btn btn-alert">Back</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer">
                <a href="{{ route('invoices.index') }}" class="btn btn-defaults">Cancel</a>
                <button class="btn btn-success" @click="create" :disabled="isProcessing"> CREATE</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
         window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>;
        var _form = {
            invoice_no: '',
            client: '',
            client_address: '',
            title: '',
            invoice_date: '',
            due_date: '',
            discount: '',
            products: [{
                name: '',
                price: '',
                qty: ''
            }]
        };
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
@endpush
