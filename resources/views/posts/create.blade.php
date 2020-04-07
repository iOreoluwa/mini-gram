@extends('layouts.app')

@section('content')
<div class="container">
    <form action="">
        <div class="row">
            <div class="col-8 offset-2">
                
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    
                    <input id="caption" type="text" 
                    class="form-control @error('caption') is-invalid @enderror" caption="caption" 
                    value="{{ old('caption') }}" autocomplete="caption" autofocus>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $caption }}</strong>
                            </span>
                        @enderror
            
                </div>
                

            </div>
        </div>  
    </form>
  
</div>
@endsection
 