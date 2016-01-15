<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePricePanelRequest extends Request
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
            //Rules
            'name'   => 'required | min : 2',
            'amount' => 'required | numeric ' ,
            'mileage'=> 'required | numeric' ,
            'special' => 'required | numeric'
        ];
    }
}
