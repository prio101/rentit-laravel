<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookingFrontEndForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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

            'name'          => 'required',
            'receive-place' => 'required' ,
            'leaving-place' => 'required' ,
            'receive-date'  => 'required' ,
            'leaving-date'  => 'required' ,
            'price-plan'    => 'required' ,
            'promotion-code' => ''
        ];
    }
}
