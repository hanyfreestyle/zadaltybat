@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />




    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" >
                <x-ui-card title="{{__('admin/menu.app_OpeningHours')}}" :add-form-error="false" >
                    @foreach($openingHours as $day)


                        <form class="mainFormx" action="{{route('App.OpeningHours.Update',$day->id)}}" method="post">
                            @csrf
                            <div class="row col-lg-12">

                                <div class="col-lg-12 OpeningHours_DayName">
                                    <h1>{{ $day->name_ar }}</h1>
                                </div>

                                <div class="col-lg-3">

                                    <x-form-input-date value="{{$day->open_from}}"  name="open_from" label="مفتوح من" type="time" col="col-lg-12" />
                                </div>
                                <div class="col-lg-3">
                                    <x-form-input-date value="{{$day->open_to}}" name="open_to" label="مفتوح الى" type="time"  col="col-lg-12" />
                                </div>
                                <div class="col-lg-3">
                                    <x-form-input-date value="{{$day->delivery_from}}"  name="delivery_from" label="التوصيل من" type="time" col="col-lg-12" />
                                </div>

                                <div class="col-lg-3">
                                    <x-form-input-date value="{{$day->delivery_to}}" name="delivery_to" label="التوصيل الى" type="time" col="col-lg-12" />
                                </div>

                                <div class="col-lg-12">
                                    <x-form-submit text="Edit" />
                                </div>


                            </div>

                        </form>



                    @endforeach
                </x-ui-card>
            </div>

        </div>
    </div>



@endsection
