<div class="section bg_dark small_pt small_pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>{{__('web/newsletter.title')}}</h3>
                </div>
            </div>
            <div class="col-md-6">

                @if (session()->has('SaveToNewsLetter'))
                    <div class="newsletter_confirm">
                        {{ session('SaveToNewsLetter') }}
                    </div>
                @else

                    <div class="newsletter_form">
                        <form wire:submit.prevent="addNew" >
                            @csrf
                            <input type="text" wire:model="email" class="form-control rounded-0" placeholder="{{__('web/newsletter.email')}}">

                            <button type="submit" class="btn btn-fill-out rounded-0" name="submit" value="Submit">{{__('web/newsletter.Subscribe')}}</button>
                        </form>
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
