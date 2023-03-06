@extends('layouts.app')
@section('content')
        <form method="post"  action="/route">
        <div style="
        
        background-color: #FFCC00;
        border-radius: 2%;
        width:400px;
        height:200px;
        margin-top:200px ;
        text-align:center;
        display:block;
        margin-left: auto;
        margin-right: auto;
        ">
            <label class="font-weight-bold" style="margin-bottom:5px; margin-top:20px; margin-left:20px;">Напишите свое имя</label>
            <input style="margin-bottom:35px;;" name='name' type="text">

            <label class="font-weight-bold" style="margin:5px;">Написать сообщение</label>
            <input style="margin-bottom:45px;" name='message' type="text">

            <input value="Отправить"  class="btn badge-pill badge-primary" type="submit">
        </div>
        </form>
@endsection

