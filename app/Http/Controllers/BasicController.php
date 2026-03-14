<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BasicController extends Controller
{
    public function index():View
    {
        return view('static.home');
    }

    public function about():View
    {
        return view('static.about');
    }

    public function contact():View
    {
        return view('static.contact');
    }

    public function submit(ContactRequest $request):RedirectResponse
    {
        // проверка введеных данных с формы при событии кнопки
        //$request->validated();

        //input('name'); данные с поля формы
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->text = $request->input('message');
        $message->save();

        return redirect()->route('home');

    }

    /*public function submit(Request $request)
    {
        //тут при нажатии кнопки на форме мы получаем все даные с формы в $request
        $request->validate([
            'name' => 'required|min:2|max:50', //1й способ записи проверки
            'email' => ['required','min:5','max:100','email'], //2й способ
            'subject' => 'required',
            'message' => 'required',
        ]);
        return "The submitted data was submitted";
    }  */
}
