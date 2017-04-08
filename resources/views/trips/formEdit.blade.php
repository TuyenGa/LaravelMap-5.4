@inject('Cities','App\Http\Utilities\City')
{{csrf_field()}}
<div class="col-md-6">
    <div class="form-group">
        <label for="street">Địa chỉ( không bao gồm quận và thành phố) : </label>
        <input type="text" name="street" id="street" class="form-control" value="{{$trip->street}}" required>
    </div>

    <div class="form-group">
        <label for="city">Thành phố : </label>
        <select name="city" id="city" class="form-control">
            @foreach($Cities::all() as $city)
                <option value="{{$city}}">{{$city}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="state">Quận/Huyện: </label>
        <input type="text" name="state" id="state" class="form-control" value="{{$trip->state}}" required>
    </div>
    <div class="form-group">
        <label for="price">Giá : </label>
        <input type="number" name="price" id="price" class="form-control" value="{{$trip->price}}" required>
    </div>

</div>



<div class="col-md-6">

    {!! Form::hidden('lat', $trip->lat , ['id'=>'lat']) !!}
    {!! Form::hidden('lng', $trip->lng , ['id'=>'lng']) !!}

    <div class="form-group">
        <label for="description">Mô Tả: </label>
        <textarea type="text" name="description" id="description" class="form-control" rows="10" required>
					{{$trip->description}}
		</textarea>
    </div>

</div>


<div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
