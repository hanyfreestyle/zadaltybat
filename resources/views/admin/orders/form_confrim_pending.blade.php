<div class="callout callout-info reject_mass">
    <h5><i class="fas fa-info"></i> تم تاكيد الطلب </h5>
    @foreach($order->orderlog as $log)
        <p>{{$log->add_date}}</p>
        <p>{{$log->user->name}}</p>
        <p>{{$log->notes}}</p>
    @endforeach
</div>

<x-ui-card title="تحديث حالة الطلب" :add-form-error="false"  >
    <form action="{{route('ShopOrders.ConfirmPending',$order->uuid)}}" method="post">
        @csrf

        <x-form-input
            name="invoice_number"
            label="رقم الفاتورة"
            value="{{old('invoice_number')}}"

        />


        <x-form-textarea
            name="notes"
            value="{{old('notes')}}"
            label="ملاحظات"
        />
        <div class="container-fluid"><x-form-submit text="تحديث" /></div>

    </form>
</x-ui-card>
