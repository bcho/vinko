@if ($errors->has('success'))
<div class="alert alert-success alert-dismissable">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{{ $errors->first('success') }}}</strong>
</div>
@elseif ($errors->any())
{{{-- */ $errors = $errors->all() /*--}}}
<div class="alert alert-error alert-dismissable">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{{ $errors[0] }}}</strong>
</div>
@endif
