@extends('layouts.app')

@section('content')
@if ($formsuckselfulssaved === true ) 
<div
    style="
        margin-top:300px;
        text-align:center;
        color:white;
    ">
     <label class="font-weight-bold">Спасибо, сообщение было отправлено</label>
@else 
<div
    style="
        margin-top:300px;
        text-align:center;
        color:white;
    ">
    <label class="font-weight-bold">Форма заполнена неправильно, проверьте уникальность имени или длину сообщения.</label>
    @endif
    <a href="/" style="color:rgb(0, 0, 0);">Вернуться на главную страницу?</a>
</div>
@endsection