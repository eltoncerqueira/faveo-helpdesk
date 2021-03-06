<?php

namespace App\Http\Requests\helpdesk;

use App\Http\Requests\Request;

/**
 * Sys_userUpdate.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class Sys_userUpdate extends Request
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
            'user_name' => 'required',
                // 'email' => 'required|email',
                // 'phone' => 'size:10',
        ];
    }
}
