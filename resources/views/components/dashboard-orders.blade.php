<div class="card card-primary">
    <div class="card-header border-transparent">
        <h3 class="card-title">{{$title}}</h3>
    </div>



    <div class="card-body p-0">

        @if(count($orders) > 0)
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th>{{__('admin/order.title_num')}}</th>
                        <th>{{__('admin/order.title_date')}}</th>
                        <th>{{__('admin/order.title_customer')}}</th>
                        <th>{{__('admin/order.title_pro_total')}}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orders as $order)
                        <tr>
                            <td><a href="#"># {{$order->id+1000}}</a></td>
                            <td>{{$order->orderDate()}}</td>
                            <td>{{$order->customer->name}}</td>
                            <td>
                                {{number_format($order->total)}}
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        @else
            <div class="col-lg-12 py-4">
                <div class="alert alert-danger alert-dismissible">
                    لا يوجد محتوى
                </div>
            </div>
        @endif




    </div>
    @if(count($orders) > 0)
        <div class="card-footer clearfix">
            <a href="{{$url}}" class="btn btn-sm btn-dark float-right">عرض الكل</a>
        </div>
    @endif
</div>
