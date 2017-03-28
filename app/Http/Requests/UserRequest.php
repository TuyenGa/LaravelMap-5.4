<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $table = 'users';
    protected $fillable = [
        'name' ,
        'email',
        'password',
        'birthday',
        'phoneNumber'
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
          'name' => 'required',
          'email'=> 'required',
          'password'=>'required',
          'birthday'=> 'required',
          'phoneNumber' => 'required'
        ];
    }

    public function message()
    {
        
    }
}
