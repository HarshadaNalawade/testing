<div class="form-group {{ $errors->has('question') ? 'has-error' : ''}}">
    <label for="question" class="col-md-4 control-label">{{ 'Question' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="question" type="text" id="question" value="{{ $faq->question or ''}}" >
        {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('answer') ? 'has-error' : ''}}">
    <label for="answer" class="col-md-4 control-label">{{ 'Answer' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="answer" type="textarea" id="answer" >{{ $faq->answer or ''}}</textarea>
        {!! $errors->first('answer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
