@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <form action="{{route('updateprofile')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                          <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __(' profile') }}</label>

                            <div class="col-md-6">
                                <input id="body" type="file" class="form-control" name="image" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
