{{Form::open(['method'=>'POST'])}}
<div class="row">
    <div class="col-sm-4 col-md-4">
        <div class="form-group">
            {{ Form::label('name', __('messages.name')) }}
            {{ Form::text('name', null, ['class'=>'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <div class="form-group">
            {{ Form::label('email', __('messages.email')) }}
            {{ Form::email('email', null, ['class'=>'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <div class="form-group">
            {{ Form::label('password', __('messages.password')) }}
            {{ Form::password('password', ['class'=>'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <div class="form-group">
            {{ Form::label('confirm_password', __('messages.confirm_password')) }}
            {{ Form::password('confirm_password',  ['class'=>'form-control']) }}
        </div>
    </div>
</div>
{{Form::close()}}
