@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection



@section('content')

   <section class="div_data">
       <div class="container-fluid">
           <div class="row ">
               <div class="col-lg-12 py-5">
                   <div class="login_register_wrap section">
                       <div class="container">
                           <div class="row justify-content-center">
                               <div class="col-lg-4 d-none d-lg-block">
                                   <img src="{{getDefPhotoPath($DefPhotoList,'form_login')}}" alt="about_img"/>
                               </div>
                               <div class="col-lg-5 offset-lg-1">
                                   <div class="login_wrap border_top">
                                       <div class="padding_eight_all bg-white ">

                                           <form method="post" action="{{route('Customer_loginCheck',$cart)}}">
                                               @csrf
                                               <div class="row">
                                                   <x-mass.confirm-massage/>
                                               </div>

                                               <div class="form-group mb-3">
                                                   <x-form-input label="{{__('web/customers.reg_form_phone')}}" name="phone" :requiredSpan="true" colrow="col-lg-12"
                                                                 value="01223129660" inputclass="dir_en" />
                                               </div>

                                               <div class="form-group mb-3">
                                                   <x-form-input label="{{__('admin/form.password')}}" name="password" :requiredSpan="true" colrow="col-lg-12"
                                                                 value="01223129660"  type="password"  :password-edit="false" inputclass="dir_en"/>
                                               </div>

                                               <div class="form-group mb-3">
                                                   <button type="submit" class="btn btn-fill-out btn-block" name="login">
                                                       {{ __('web/customers.login_but') }}
                                                   </button>
                                               </div>
                                           </form>

                                           <div class="form-note text-center">
                                               <a href="{{route('Customer_Register')}}">{{ __('web/customers.login_sign_up_now') }}</a>
                                               <span>{{__('web/customers.login_have_no')}}</span>
                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>



@endsection

