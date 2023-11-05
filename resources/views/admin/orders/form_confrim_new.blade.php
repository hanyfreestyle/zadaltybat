<x-ui-card title="تحديث حالة الطلب" :add-form-error="false"  >
    <form action="{{route('ShopOrders.ConfirmNew',$order->uuid)}}" method="post">
        @csrf
        <div class="row">
            <x-form-select-arr
                label="تحديد الحالة"
                sendvalue="{{old('order_status')}}"
                name="order_status" colrow="col-lg-12"
                select-type="order_state"/>
        </div>

        <x-form-textarea
            name="notes"
            value="{{old('notes')}}"
            label="ملاحظات"
        />
        <div class="container-fluid"><x-form-submit text="تحديث" /></div>

    </form>
</x-ui-card>
