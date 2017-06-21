<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmRegister;
use App\Mail\NewRegister;
use App\Mail\SendContact;
use App\Models\Estado;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    private $repository;

    public function __construct(RegisterRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function index()
    {
        $estados = Estado::all();
        return view('index',compact('estados'));
    }

    public function register(Request $request)
    {
        if ($this->repository->create($request->all())){
            Mail::to($request->EMAIL)->queue(new ConfirmRegister($request->all()));
            Mail::to('angelo.neto@fiero.org.br')->queue(new NewRegister());

            alert()->success('Sua inscrição foi efetuada com sucesso!', 'Registro efetuado!');
            return redirect()->route('index');
        }else{
            alert()->error('Erro ao realizar sua inscrição','Erro!');
            return redirect()->route('index');
        }
    }

    public function contact(Request $request)
    {
        Mail::to('angelo.neto@fiero.org.br')->queue(new SendContact($request->all()));

        alert()->success('Logo entraremos em contato com você.', 'Contato enviado!');

        return redirect()->route('index');
    }
    
}
