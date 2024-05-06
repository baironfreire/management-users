<form wire:submit="save">
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input  wire:model="form.name" id="name" type="text" class="form-control @error('form.name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
            @error('form.name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
 
    <div class="row mb-3">
        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

        <div class="col-md-6">
            <input wire:model="form.last_name" id="last_name" type="text" class="form-control @error('form.last_name') is-invalid @enderror" name="last_name"  required autocomplete="last_name" autofocus>

            @error('form.last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

        <div class="col-md-6">
            <input wire:model="form.email" id="email" type="text" class="form-control @error('form.email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>

            @error('form.email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

        <div class="col-md-6">
            <input wire:model="form.phone_number" id="phone_number" type="text" class="form-control @error('form.phone_number') is-invalid @enderror" name="phone_number"  required autocomplete="phone_number" autofocus>

            @error('form.phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
 
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Actualizar') }}
            </button>
            <button type="button" class="btn btn-secondary" wire:click="cancel">
            {{ __('Cancelar') }}
            </button>
        </div>
    </div>
</form>