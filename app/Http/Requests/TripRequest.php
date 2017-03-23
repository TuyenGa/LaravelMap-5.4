<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $table = 'trips';
    protected $fillable =[
        'street',
        'state',
        'city',
        'lat',
        'lng',
        'description'
    ];
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'street' => 'required',
            'state' => 'required',
            'city' =>'required',
            'lat' => 'required',
            'lng' => 'required',
            'description'=>'required'
        ];
    }
}
