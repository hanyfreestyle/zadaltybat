@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.Password_Update',$customer->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="{{$qr['col']}}">

                        <div class="row">
                            <x-form-input label="{{__('admin/customer.name') }}" name="name" :requiredSpan="true" :disabled="true"
                                          colrow="col-lg-12" value="{{ $customer->name }}"   inputclass="dir_ar"/>
                        </div>


                        @if($customer->password_temp)
                            <div class="row">
                                <x-form-input label="كلمة المرور الحالية" name="name" :requiredSpan="true" :disabled="true"
                                              colrow="col-lg-12" value="{{ $customer->password_temp }}"   inputclass="dir_en"/>
                            </div>
                        @endif


                        <div class="row form-group mb-3">
                            <x-form-input label="تغيير كلمة المرور" name="new_password" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('new_password')}}" inputclass="dir_en"/>
                        </div>

                    </div>


                    @if($qr['photo'] != null)
                        <div class="col-lg-4 text-center py-4">
                            {!! $qr['photo'] !!}
                        </div>

                        @if(Auth::user()->id == 1)
                            <a href="{{$qr['url']}}" target="_blank"> Url</a>
                        @endif


                    @endif


                </div>

                <div class="container-fluid">
                    <x-form-submit-new  :page-data="$pageData" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


