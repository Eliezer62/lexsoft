<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function delete($xid)
    {
        $telefone = Telefone::firstWhere('xid', $xid);
        if(!is_null($telefone)) $telefone->delete();

        return response(status: 200);
    }
}
