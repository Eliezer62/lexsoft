<?php

namespace App\Casts;

use App\Models\ClientePessoaJur;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ClienteJurCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        $cliente = ClientePessoaJur::firstWhere('xid', $value);
        if(is_null($cliente))
        {
            return null;
        }
        return $cliente->id;
    }
}
