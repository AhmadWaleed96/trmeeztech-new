@extends('admin.master')
@section('title', 'Service-' . config('app.name'))
@section('sup-title', 'Edit-Service')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Service') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name :') }}</label>
                        <input type="text" name="name" id="name" class="form-control form-control-solid"
                            placeholder="{{ __('Name :') }}" value="{{$services->name }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('URL :') }}</label>
                        <input type="text" name="url" id="url" class="form-control form-control-solid"
                            value="{{$services->url }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"
                             />

                    </div>



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="form-control form-control-solid"
                            placeholder="{{ __('Description :') }}">{{$services->description }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $services->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.services.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performUpdate(id) {
        let formData = new FormData();
        formData.append("_method", "PUT")
        formData.append('name',document.getElementById('name').value);
        formData.append('url',document.getElementById('url').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('image',document.getElementById('image').files[0]);

        storeRoute('/admin/services/'+id,formData,'/admin/services');

    }

</script>

@endsection
