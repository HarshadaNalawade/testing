<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <select name="title" class="form-control" id="title" required>
    @foreach (json_decode('{"Mr":"Mr","Mrs":"Mrs","Miss":"Miss"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($adminuser->title) && $adminuser->title == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="col-md-4 control-label">{{ 'Username' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="username" type="text" id="username" value="{{ $adminuser->username or ''}}" required>
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="password" id="password" value="{{ $adminuser->password or ''}}" required>
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    <label for="first_name" class="col-md-4 control-label">{{ 'First Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="first_name" type="text" id="first_name" value="{{ $adminuser->first_name or ''}}" required>
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    <label for="last_name" class="col-md-4 control-label">{{ 'Last Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="last_name" type="text" id="last_name" value="{{ $adminuser->last_name or ''}}" required>
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email_id') ? 'has-error' : ''}}">
    <label for="email_id" class="col-md-4 control-label">{{ 'Email Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email_id" type="email" id="email_id" value="{{ $adminuser->email_id or ''}}" required>
        {!! $errors->first('email_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    <label for="phone_number" class="col-md-4 control-label">{{ 'Phone Number' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone_number" type="text" id="phone_number" value="{{ $adminuser->phone_number or ''}}" required>
        {!! $errors->first('phone_number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('passport_number') ? 'has-error' : ''}}">
    <label for="passport_number" class="col-md-4 control-label">{{ 'Passport Number' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="passport_number" type="text" id="passport_number" value="{{ $adminuser->passport_number or ''}}" required>
        {!! $errors->first('passport_number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Address' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="address" type="text" id="address" value="{{ $adminuser->address or ''}}" >
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $adminuser->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="col-md-4 control-label">{{ 'City' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="city" type="text" id="city" value="{{ $adminuser->city or ''}}" >
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="col-md-4 control-label">{{ 'Country' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country" type="text" id="country" value="{{ $adminuser->country or ''}}" >
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="col-md-4 control-label">{{ 'Role' }}</label>
    <div class="col-md-6">
        <select name="role" class="form-control" id="role" >
    @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($adminuser->role) && $adminuser->role == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
