@inject('Cities','App\Http\Utilities\City')
{{csrf_field()}}
<div class="col-md-6">
    <div class="form-group">
        <label for="street">Street: </label>
        <input type="text" name="street" id="street" class="form-control" value="{{old('street')}}" required>
    </div>

    <div class="form-group">
        <label for="city">City: </label>
        <select name="city" id="city" class="form-control">
            @foreach($Cities::all() as $city)
                <option value="{{$city}}">{{$city}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="state">State: </label>
        <input type="text" name="state" id="state" class="form-control" value="{{old('state')}}" required>
    </div>
    <div class="form-group">
        <label for="price">Price : </label>
        <input type="number" name="price" id="price" class="form-control" value="{{old('price')}}" required>
    </div>

</div>



<div class="col-md-6">





    {!! Form::hidden('lat', null , ['id'=>'lat']) !!}
    {!! Form::hidden('lng', null , ['id'=>'lng']) !!}

    <div class="form-group">
        <label for="description">Description: </label>
        <textarea type="text" name="description" id="description" class="form-control" rows="10" required>
					{{old('description')}}
				</textarea>
    </div>

</div>
<hr>
<div class="col-md-8 col-md-offset-2">
    <label for="pac-input">Choose your position .</label>
    <input id="pac-input" type="text" placeholder="Search Box"/>
    <div id="map-canvas"></div>
</div>

<hr>


<div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary">Create Trips</button>
</div>
