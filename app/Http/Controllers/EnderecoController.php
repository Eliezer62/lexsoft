<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function delete($xid)
    {
        $endereco = Endereco::firstWhere('xid', $xid);
        if(!is_null($endereco))
        {
            $endereco->delete();
        }

        return response(status: 200);
    }
}
