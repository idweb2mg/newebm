<?php

namespace App\Http\Requests;

class UserUpdateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules( )
    {//On récupère l'id de l'utilisateur dans le second segment de l'url. Ensuite on utilise une possibilité d'exclusion de la règle "unique".
        $id = $this->segment(2);
        return  [
            'name' => 'bail|required|max:30|alpha|unique:users,name,' . $id,
            'email' => 'bail|required|email|unique:users,email,' . $id
        ];
    }
}
