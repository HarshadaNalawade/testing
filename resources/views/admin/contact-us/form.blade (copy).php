<div class="form-group {{ $errors->has('full_name') ? 'has-error' : ''}}">
    <label for="full_name" class="col-md-4 control-label">{{ 'Full Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="full_name" type="text" id="full_name" value="{{ $contactus->full_name or ''}}" >
        {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email_id') ? 'has-error' : ''}}">
    <label for="email_id" class="col-md-4 control-label">{{ 'Email Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email_id" type="email" id="email_id" value="{{ $contactus->email_id or ''}}" >
        {!! $errors->first('email_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <select name="category" class="form-control" id="category" >
            @php ($category = array("Account and Profile Info"=>"Account and Profile Info","Technical"=>"Technical","Miscellaneous"=>"Miscellaneous"))
            @foreach ($category as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($contactus->category) && $contactus->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach 
        </select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
    <label for="message" class="col-md-4 control-label">{{ 'Message' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="message" type="textarea" id="message" >{{ $contactus->message or ''}}</textarea>
        {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('request_call') ? 'has-error' : ''}}">
    <label for="request_call" class="col-md-4 control-label">{{ 'Request Call' }}</label>
    <div class="col-md-6">
    <select name="category" class="form-control" id="category" >
            @php ($request = array("yes"=>"yes","no"=>"no"))
            @foreach ($request as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($contactus->request_call) && $contactus->request_call == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach 
        </select>
        {!! $errors->first('request_call', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
    <label for="mobile_number" class="col-md-4 control-label">{{ 'Mobile Number' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mobile_number" type="text" id="mobile_number" value="{{ $contactus->mobile_number or ''}}" >
        {!! $errors->first('mobile_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
