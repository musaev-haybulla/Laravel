{{ Form::model($country, ['url' => route('cms.countries.update', ['country' => $country]), 'method' => 'PUT']) }}
    @include('countries.blocks.form.fields')
    <div class="form-group">
        {{ Form::submit(__('messages.edit'), array('class' => 'btn btn-success')) }}
    </div>
{{ Form::close() }}