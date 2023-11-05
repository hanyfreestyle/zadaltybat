@extends('admin.layouts.app')

@section('content')


    <x-html-section>

            <div class="row Qr_Div">

                @foreach($customers as $customer  )
                    <div class="col-lg-6">
                        <div class="row Qr_row">
                            <div class="col-lg-7">
                                <h1>{{$customer->name}}</h1>
                                <h1>{{$customer->phone}}</h1>
                                <p>{{$customer->city->name}}</p>
                                <p>
                                    {!! nl2br($customer->addresses_def->first()->address) !!}
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <p class="text-lg-center">{{QrCode::size(200)->generate(route('Customer_QrLogin')."?U=".$customer->phone."&P=".$customer->password_temp)}}</p>
                            </div>

                        </div>



                    </div>
                @endforeach

            </div>


    </x-html-section>


@endsection

@section('JsFileBeforeAdminlte')
    <script src="{{defAdminAssets('js/printThis.js')}}"></script>
    <script>
        $('#basic').on("click", function () {
            $('.demo').printThis({
                base: "https://jasonday.github.io/printThis/"
            });
        });
   </script>
@endsection



{{--<section class="container" aria-describedby="demos">--}}
{{--    <h2 id="demos">Demo</h2>--}}
{{--    <br/>--}}
{{--    <div class="row">--}}
{{--        <div class="one-half column">--}}
{{--            <a id="basic" href="#nada" class="button button-primary">Print container</a>--}}
{{--            <pre>--}}
{{--              <code>--}}
{{--$(".demo").printThis();--}}
{{--              </code>--}}
{{--            </pre>--}}
{{--        </div>--}}
{{--        <div class="one-half column">--}}
{{--            <a id="advanced" href="#nada" class="button button-primary">Print kittens</a>--}}
{{--            <pre>--}}
{{--              <code>--}}
{{--$('#kitty-one, #kitty-two, #kitty-three').printThis({--}}
{{--  importCSS: false,--}}
{{--  header: "&lt;h1&gt;Look at all of my kitties!&lt;/h1&gt;"--}}
{{--});--}}
{{--              </code>--}}
{{--            </pre>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="demo twelve columns">--}}
{{--            <h3>Kittens</h3>--}}

{{--            <img id="kitty-one" alt="cute kitten" src="assets/images/cat1.jpg" />--}}

{{--            <p>Bathe self with tongue then lick owner's face kitten is playing with dead mouse and leave dead animals as gifts.--}}
{{--                Lies down . Ears back wide eyed then cats take over the world meowing non stop for food.</p>--}}

{{--            <img class="u-pull-left" id="kitty-two" alt="cute kitten" src="assets/images/cat2.jpg"/>--}}

{{--            <p>Always hungry lick arm hair. Kitty loves pigs chase the pig around the house. Spend all night ensuring people don't--}}
{{--                sleep sleep all day play time.</p>--}}

{{--            <p>Licks paws sit and stare, and going to catch the red dot today going to catch the red dot today. Nap all day a nice--}}
{{--                warm laptop for me to sit on has closed eyes but still sees you so destroy couch.</p>--}}

{{--            <p>Hide at bottom of staircase to trip human cat not kitten around get video posted to internet for chasing red dot.</p>--}}

{{--            <p>Chase red laser dot flee in terror at cucumber discovered on floor play riveting piece on synthesizer keyboard meoooow!--}}
{{--                Attack the dog then pretend like nothing happened. Poop in litter box, scratch the walls eat and than sleep on--}}
{{--                your face wake up human for food at 4am.</p>--}}

{{--            <img class="u-pull-right" id="kitty-three" alt="cute kitten" src="assets/images/cat3.jpg"/>--}}

{{--            <p>Chase red laser dot swat turds around the house shake treat bag thinking longingly about tuna brine. Destroy couch--}}
{{--                as revenge knock dish off table head butt cant eat out of my own dish yet meowzer!</p>--}}

{{--            <p>Destroy couch as revenge. Claw drapes lick the plastic bag swat turds around the house eat and than sleep on your--}}
{{--                face. Mark territory pelt around the house and up and down stairs chasing phantoms. Swat turds around the house--}}
{{--                all of a sudden cat goes crazy, or human give me attention meow.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
