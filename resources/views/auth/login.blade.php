@extends('layouts.auth-master')

@section('content')
    <style>



/* Style pour les messages d'erreur */
.text-danger {
    color: #dc3545;
}

.form {
    max-width: 610px;
    margin: 36px auto;
}


.hello {
    height: 79px;
    margin-top: -30px;
}

.connectez-vous{
   color: #FD6C6B;
   font-family: Segoe UI;
   font-size: 40px;
   font-style: normal;
   font-weight: 700;
   line-height: normal; 
   margin-left: 600px;
   margin-top: 10px;
}
.connect{
    width: 610px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 8px;
    background: #FD6C6B;
    margin-top: 38.5px;

}
.btn:hover {
    color: #FE9493;
}
.md_oublié{
color: #FD6C6B;
font-family: Segoe UI;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: normal;
}

a {
 
    color: #FD6C6B;
    font-size: 14px;
    font-style: normal;
    font-weight: 600px;
    line-height: normal;
    margin-left: 171px;
}
a:hover {
    color: #FE9493;
}
.btn {
    display: inline-block;
    font-family: Segoe UI;
    font-weight: 600;
    line-height: 1.5;
    color: #ffffff;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: 8px;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
     margin-left: 600px;
}
.form-control{
    width: 610px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #F5F5F5;
    margin-top: 5px;
    margin-left:638.5px;
  
}
.floatingName{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.title{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 179.03px;
    margin-top: 53.5px;
}
.title2{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 119.03px;
    margin-top: 36.5px;
}

.background-pink {
        background-color: #FFEFF0;;
        width: 605px;
        height: 1024px;
        flex-shrink: 0;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 8px 0 0 8px;
    }
.background-image {
        background-image:url('{{ asset('images/Logo_MyEvent.png') }}'); /* Replace with your image path */
        background-size: cover;
        background-repeat: no-repeat;
        width: 374px;
        height: 121px;
        margin-top: 253px;
         margin-left: 100px;
        position: fixed;
        top: 0;
        left: 0;
        border-radius: 8px 0 0 8px;
    }

.background-google{
    background-image:url('{{ asset('images/Group 182.png') }}'); 
    width: 610px;
    height: 47px;
    margin-left: 653px;
    margin-top: -11px;

}
.background-facebook{
    background-image:url('{{ asset('images/Group 1000002803.png') }}'); 
    width: 610px;
    height: 47px;
    margin-left: 653px;
    margin-top: -25px;

}
.ou {
    background-image: url(http://127.0.0.1:8000/images/Group 21.png);
    width: 525px;
    height: 25px;
    margin-left: 770px;
    margin-top: 36px;
}
hr {
        margin: 3rem 188px 61px;
        color: #b7b1b1;
        background-color: currentColor;
        border: 0;
        opacity: 82.25;
        margin-left: 791px;
}

.title3 {
    color: #9A9A9A;
    font-family: Segoe UI;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 617px;
    margin-top: -39px;
}
.retour{
    margin-left:-9px;
    margin-top: 9px;

}
.title4 {
    color: #9A9A9A;
    /* text-align: center; */
    font-family: Segoe UI;
    font-size: 18px;
    /* font-style: normal; */
    font-weight: 400;
    /* line-height: normal; */
    margin-top: 376px;
    position: fixed;
    margin-left: 191px;
}
.faragh{
    height: 20px;
}

    </style>

<div class="container">
    <div class="background-pink">
        <div class="background-image"></div> 
          <h6 class="title4"> est content de vous revoir </h6>
    </div> 

    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
     <div>
        <div class="faragh"></div>

        <a class="retour" href="{{ route('home.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
            <path d="M21.2526 0.208984C9.6376 0.208984 0.210938 9.63565 0.210938 21.2506C0.210938 32.8657 9.6376 42.2923 21.2526 42.2923C32.8676 42.2923 42.2943 32.8657 42.2943 21.2506C42.2943 9.63565 32.8676 0.208984 21.2526 0.208984ZM28.6172 22.8288H17.6966L21.3157 26.4479C21.9259 27.0581 21.9259 28.0681 21.3157 28.6784C21.0001 28.994 20.6003 29.1413 20.2005 29.1413C19.8007 29.1413 19.4009 28.994 19.0853 28.6784L12.7728 22.3659C12.4793 22.0689 12.3147 21.6682 12.3147 21.2506C12.3147 20.8331 12.4793 20.4324 12.7728 20.1354L19.0853 13.8229C19.6955 13.2127 20.7055 13.2127 21.3157 13.8229C21.9259 14.4332 21.9259 15.4431 21.3157 16.0534L17.6966 19.6725H28.6172C29.4799 19.6725 30.1953 20.3879 30.1953 21.2506C30.1953 22.1134 29.4799 22.8288 28.6172 22.8288Z" fill="#FD6C6B"/>
        </svg>
         </a>
        <h1 class="connectez-vous">Connectez-vous facilement!</h1>
    </div>

        @include('layouts.partials.messages')
    <div>
          <label class="title">Email ou Nom utilisateur</label>
         <div class="form-group  ">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="  Votre adresse email ici..." required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
    </div>
    <div>
        <label class="title2">Mot de passe</label>
        <div class="form-group ">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="  Votre mot de passe ici..." required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <div class="checkbox">
                <label >
                    <a href="{{ route('forget.password.get') }}"> Mot de passe oublié ?</a>
                </label>
            </div>    
        </div>

    </div>
    <div>
        <div>
        <button class=" btn  connect" type="submit">Se connecter</button>
        <hr> 
         </div>
        <h5 class="title3">Via vos réseaux sociaux</h5>

    
        <div class="fles items-center justify-end mt-4">
            <a href="{{ url('login/google')}}">
                     <div class="background-google"></div>

                    
            </a>
        </div>
        <div class="fles items-center justify-end mt-4">
            <a href="{{ url('login/facebook')}}">
                    <div class="background-facebook"></div>
            </a>
        </div>
  

    </form>
</div>
@endsection