@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <x-html-section>
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">

            </div>
            <div class="card-body ">
                <div class="row">

                    <div class="col-lg-12 pt-3">
                        <div class="alert alert-dark alert-dismissible">
                            {{ __('admin/menu.category') }}
                        </div>
                        <x-def-settings modelname="category">
                        </x-def-settings>
                    </div>

                    <div class="col-lg-12 pt-3">
                        <div class="alert alert-dark alert-dismissible">
                            {{ __('admin/menu.product') }}
                        </div>
                        <x-def-settings modelname="product">
                        </x-def-settings>
                    </div>



                    <div class="col-lg-12 pt-3">
                        <div class="alert alert-dark alert-dismissible">
                            {{ __('admin/menu.webPrivacy') }}
                        </div>
                        <x-def-settings modelname="webPrivacy">
                        </x-def-settings>
                    </div>

                    <div class="col-lg-12 pt-3">
                        <div class="alert alert-dark alert-dismissible">
                            {{ __('admin/menu.OurClient') }}
                        </div>
                        <x-def-settings modelname="OurClient">
                        </x-def-settings>
                    </div>




                </div>









            </div>

        </div>
    </x-html-section>

@endsection
