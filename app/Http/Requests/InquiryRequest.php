<?php

namespace App\Http\Requests;

use App\Traits\ResponseAsJson;
use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
{
    use ResponseAsJson;

    public function rules()
    {
        return [
            'name',
            'email',
            'contact_number',
            'type',
            'message'
        ];
    }
}