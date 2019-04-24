@extends('layouts.app')

@section('title', 'List Screen')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createuser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('No Handphone') }}</label>

                            <div class="col-md-6">
                                <input id="nohp" type="nohp" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp">

                                @if ($errors->has('nohp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nohp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6 addrs">
                                <div>
                                <input type="text" name="address[]" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"/>
                            <br>
                            </div>
                                {{-- <textarea name="address[]" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" id="" cols="30" rows="5"> --}}
                                {{-- </textarea> --}}
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"> 
                                <button type="button" class="btn btn-success add">+</button>
                            </div>
                        </div>
                        <br>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                                <a href="{{ url('/') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".addrs");
        var add_button = $(".add");

        var x = 1;
        $(add_button).click(function() {
            // e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div><div class="row"><div class="col-md-12"><input type="text" name="address[]" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" required/><a href="#" style="" class="btn btn-danger pull-right delete">-</a></div></div></div>'); //add input box
            } else {
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
    </script>

@endsection