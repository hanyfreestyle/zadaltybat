@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')

    <div class="section">

        <div class="container PrivacyList">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                    <p class="text-center g_des">{{$PageMeta->g_des}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                @foreach($Terms as $Term)
                    <h2>{!! $Term->h1 !!}</h2>
                    <h3>{!! $Term->h2 !!}</h3>
                    <p>{!! ChangeText($Term->des) !!}</p>
                    @if($Term->lists)
                        <ul>
                            @foreach(explode(PHP_EOL, $Term->lists) as $list)
                                <li>{{$list}}</li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </div>
            </div>
        </div>
    </div>

@endsection

