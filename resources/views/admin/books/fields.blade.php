<!-- Titile Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titile', 'Titile:') !!}
    {!! Form::text('titile', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.books.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
