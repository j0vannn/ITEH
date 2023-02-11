<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientInfoResource extends JsonResource
{
    public static $wrap = 'Clients';
    public function toArray($request)
    {
        return [
            'Name' => $this->Ime,
            'Email' => $this->email,
            'JMBG' => $this->JMBG,

        ];
    }
}
