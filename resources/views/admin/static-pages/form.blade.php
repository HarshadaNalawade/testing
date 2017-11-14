<div class="form-group {{ $errors->has('page_title') ? 'has-error' : ''}}">
    <label for="page_title" class="col-md-4 control-label">{{ 'Page Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="page_title" type="text" id="page_title" value="{{ $staticpage->page_title or ''}}" >
        {!! $errors->first('page_title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('page_content') ? 'has-error' : ''}}">
    <label for="page_content" class="col-md-4 control-label">{{ 'Page Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="page_content" type="textarea" id="page_content" >{{ $staticpage->page_content or ''}}</textarea>
        {!! $errors->first('page_content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
