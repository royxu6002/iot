@extends('layouts.default')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-cloak>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Edit Invoice</span>
                    <a href="{{ route('invoices.index') }}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer">
                <a href="{{ route('invoices.index') }}" class="btn btn-defaults">Cancel</a>
                <button class="btn btn-success" @click="update" :disabled="isProcessing"> UPDATE</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>;
        var _form = {!! $invoice->toJson() !!};
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
