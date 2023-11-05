<div class="section bg_defaultX newsletter_back small_pt small_pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="newsletter_text text_white">
                    <h3>{{__('web/newsletter.title')}}</h3>
                    <p> {{__('web/newsletter.text')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                @if (session()->has('SaveToNewsLetter'))
                    <div class="newsletter_confirm">
                        {{ session('SaveToNewsLetter') }}
                    </div>
                @else
                    <div class="newsletter_form2">
                        <form wire:submit.prevent="addNew" >
                            @csrf
                            <input type="text" wire:model="email" class="form-control rounded-0" placeholder="{{__('web/newsletter.email')}}">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">{{__('web/newsletter.Subscribe')}}</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
