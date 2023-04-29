@extends('admin.master')
@section('title', 'Jop-' . config('app.name'))
@section('sup-title', 'Edit-Jop')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Jop') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name :') }}</label>
                        <input type="text" name="name" id="name" class="form-control form-control-solid"
                            placeholder="{{ __('Name :') }}" value="{{$jops->name }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Location :') }}</label>
                        <input type="text" name="location" id="location" class="form-control form-control-solid"
                            placeholder="{{ __('Location :') }}" value="{{$jops->location }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Final Date :') }}</label>
                        <input type="date" name="final_date" id="final_date" class="form-control form-control-solid"
                            placeholder="{{ __('Final Date :') }}" value="{{$jops->final_date }}"/>

                    </div>
                    
                    



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="form-control form-control-solid"
                            placeholder="{{ __('Description :') }}">{{$jops->description }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $jops->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.jops.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

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
        formData.append('final_date',document.getElementById('final_date').value);
        formData.append('location',document.getElementById('location').value);
        formData.append('description',document.getElementById('description').value);

        storeRoute('/admin/jops/'+id,formData,'/admin/jops');

    }

</script>

@endsection
