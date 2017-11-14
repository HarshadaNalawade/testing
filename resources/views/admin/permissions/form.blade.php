<div class="form-group {{ $errors->has('permission_name') ? 'has-error' : ''}}">
    <label for="permission_name" class="col-md-4 control-label">{{ 'Permission Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="permission_name" type="text" id="permission_name" value="{{ $permission->permission_name or ''}}" >
        {!! $errors->first('permission_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
