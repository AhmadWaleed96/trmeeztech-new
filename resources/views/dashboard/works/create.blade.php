@extends('admin.master')
@section('title', 'Works-' . config('app.name'))
@section('sup-title', 'Create-Works')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Add Works') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name :') }}</label>
                        <input type="text" name="name" id="name" class="form-control form-control-solid"
                            placeholder="{{ __('Name :') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Date :') }}</label>
                        <input type="date" name="date" id="date" class="form-control form-control-solid"
                            placeholder="{{ __('Date :') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Client :') }}</label>
                        <input type="text" name="client" id="client" class="form-control form-control-solid"
                            placeholder="{{ __('Client :') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Services :') }}</label>
                        <select name="service_id" id="service_id" class="form-control form-control-solid">
                            @foreach ($services as $service )
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('URL :') }}</label>
                        <input type="text" name="url" id="url" class="form-control form-control-solid"
                            value="https//" />

                    </div>
                    



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="form-control form-control-solid"
                            placeholder="{{ __('Description :') }}"></textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performStore()" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route("admin.works.index") }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performStore(){
        let formData = new FormData();
        formData.append('name',document.getElementById('name').value);
        formData.append('url',document.getElementById('url').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('client',document.getElementById('client').value);
        formData.append('date',document.getElementById('date').value);
        formData.append('service_id',document.getElementById('service_id').value);

         store('/admin/works',formData);

    }

</script>

@endsection
