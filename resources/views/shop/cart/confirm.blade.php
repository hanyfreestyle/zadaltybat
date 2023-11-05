@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section ">
        <div class="container section_confirm py-4">


            <div class="row">

                @if (session()->has('order_not_saved'))
                    <div class="alert alert-danger text-center">
                        {{ session('order_not_saved') }}
                    </div>
                @endif


                <div class="col-md-6 mb-1">
                    <div class="heading_s1">
                        <h4>{{__('web/cart.cart_veiw_Totals')}}</h4>
                    </div>
                    <div class="order_review">
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{__('web/cart.review_Product')}}</th>
                                    <th>{{__('web/cart.review_Total')}}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($CartList as $ProductCart)
                                    <tr>
                                        <td>

                                            <div class="confirm_name">
                                                <span class="confirm_product_qty">x {{$ProductCart->qty}}</span>
                                                {{$ProductCart->model->name}}
                                            </div>

                                        </td>
                                        <td>{{ $ProductCart->price *  $ProductCart->qty }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>

                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.Subtotal')}}</td>
                                    <td class="cart_total_amount">{{$subtotal}}</td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>--}}
{{--                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                    <td class="cart_total_amount"><strong>  {{$subtotal}} </strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>{{__('web/cart.review_address')}}</h4>
                    </div>

                    @if(count($addresses) == 0)
                       @include('shop.customer.profile_address_form_inc',['pageType' => 'orders'])
                    @else
                        <form method="post" action="{{route('Shop_CartOrderSave')}}">
                            @csrf
                            <livewire:show-address-block :addresses="$addresses" />
                            <x-form-textarea
                                label=""
                                name="notes"
                                value="{{old('notes')}}"
                                placeholder="{{__('web/cart.review_notes')}}"
                            />


                            <div class="form-group mt-3">
                                <button class="btn btn-fill-out btn-block" type="submit">
                                    {{__('web/cart.review_confirm_but')}}
                                </button>

                            </div>
                        </form>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection


@section('AddScript')
{{--    <script>--}}

{{--        $('.address_id').on('change', function() {--}}
{{--            var address_id = $('.address_id').val();--}}
{{--            $("#address_id").empty();--}}

{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}

{{--            $.ajax({--}}
{{--             ///   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},--}}
{{--                url: '{{route('Shop_PrintAddressAjax')}}',--}}
{{--                type: 'POST',--}}
{{--               // dataType: 'text',--}}
{{--                // data: {--}}
{{--                //     address_id: address_id,--}}
{{--                // },--}}
{{--                success: function (response) {--}}
{{--                    console.log(response);--}}
{{--                }--}}
{{--            });--}}


{{--        });--}}


{{--   --}}
{{--    </script>--}}


@endsection

