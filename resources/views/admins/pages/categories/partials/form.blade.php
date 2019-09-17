@csrf
<div class="form-group">
    <label for="name">Name</label>
    <div class="form-line  @if ($errors->has('name')) error  @endif">
        <input class="form-control" type="text" name="name" id="name" value="{{$category->name ?? ''}}">
    </div>

    <input type="file" name="image">
    @if ($errors->has('name'))
        <label class="error" for="{{ 'name' }}">{{ $errors->first('name') }}</label>
    @endif
</div>
