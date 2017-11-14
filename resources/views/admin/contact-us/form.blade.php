<div class="form-group {{ $errors->has('address_line1') ? 'has-error' : ''}}">
    <label for="address_line1" class="col-md-4 control-label">{{ 'Address Line 1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="address_line1" type="text" id="address_line1" value="{{ $contactaddress->address_line1 or ''}}" >
        {!! $errors->first('address_line1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_line2') ? 'has-error' : ''}}">
    <label for="address_line2" class="col-md-4 control-label">{{ 'Address Line 2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="address_line2" type="text" id="address_line2" value="{{ $contactaddress->address_line2 or ''}}" >
        {!! $errors->first('address_line2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="col-md-4 control-label">{{ 'City' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="city" type="text" id="city" value="{{ $contactaddress->city or ''}}" >
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $contactaddress->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="col-md-4 control-label">{{ 'Country' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country" type="text" id="country" value="{{ $contactaddress->country or ''}}" >
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
