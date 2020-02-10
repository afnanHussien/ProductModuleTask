    {{ csrf_field() }}
    <div class="row form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-sm-2 control-label">Title</label>

        <div class="col-sm-6">
            <input id="title" type="text" required class="form-control" name="title" value="{{ isset($category) ? $category->title : old('title') }}">
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="col-sm-2 control-label">Description</label>

        <div class="col-sm-6">
            <textarea id="description" class="form-control" name="description" rows="4">{{ isset($category) ? $category->description : old('description') }}</textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row form-group{{ $errors->has('image') ? ' has-error' : '' }}">
        <label for="image" class="col-sm-2 control-label">Image</label>
        
        <div class="col-sm-6">
            <input id="image" type="file" class="form-control" name="image" value="{{ isset($category) ? $category->image : old('image') }}" style="border:none">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>
