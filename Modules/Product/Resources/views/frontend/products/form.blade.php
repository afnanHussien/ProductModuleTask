    {{ csrf_field() }}
    <div class="row form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-sm-2 control-label">Title</label>

        <div class="col-sm-6">
            <input id="title" type="text" required class="form-control" name="title" value="{{ isset($product) ? $product->title : old('title') }}">
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
            <textarea id="description" class="form-control" name="description" rows="4">{{ isset($product) ? $product->description : old('description') }}</textarea>
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
            <input id="image" type="file" class="form-control" name="image" value="{{ isset($product) ? $product->image : old('image') }}" style="border:none">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
        <label for="category" class="col-sm-2 control-label">Category</label>

        <div class="col-sm-6">
            <select id="category" required class="form-control" name="category_id">
                @foreach ($categories as $category)
                    @if((isset($product) && $product->category_id == $category->id) || (isset($product) && old('category_id') == $category->id))
                        <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div id="colorPriceDiv" class="row form-group">
        <label for="color" class="col-sm-2 control-label">Colors</label>

        <div class="col-sm-2">
            <select id="color" required class="form-control" name="colorIds[]">
                    @foreach ($colors as $color)
                        
                            <option value="{{ $color->id }}">{{ $color->value }}</option>
                    @endforeach
            </select>
        </div>

        <label for="price" class="col-sm-2 control-label">Price</label>

        <div class="col-sm-2">
            <input id="price" type="text" required class="form-control" name="priceArray[]">
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-success form-control input-sm add"> + </button>
        </div>
    </div>
    
