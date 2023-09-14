@extends('layouts.auth-master')

@section('content')

<style>
     .form-control{
    width: 610px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #F5F5F5;
    margin-top: 5px;
    margin-left:726.5px;
    }
    .title1{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 133.03px;
    margin-top: 53.5px;
}
.title2{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 131.03px;
    margin-top: 33.5px
}
.title3{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 118.03px;
    margin-top: 33.5px;
}
.title4{
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 205.03px;
    margin-top: 33.5px;
}
.title5 {
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
    .retour{
    margin-left:-115px;
    margin-top: 9px;

}
.faragh{
    height: 20px;
}
.connectez-vous{
     color: #FD6C6B;
     font-family: Segoe UI;
     font-size: 40px;
     font-style: normal;
     font-weight: 700;
     line-height: normal; 
     margin-left: 600px;
     margin-top: 51px;
    } 
    .register{
    color: white;
    width: 610px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 8px;
    background: #FD6C6B;
    margin-top: 57.5px;
    margin-left: 604.5px;
    }
    .form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 47.5em;
    margin-bottom: .125rem;
}
 

.form-check-label{
    margin-right: 264px;
    margin-top:38px;
}
.form-check-input{
    margin-top:43px;
}
.lien{
    color: #FD6C6B;
font-family: Segoe UI;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;

}
.title6 {
    color: #9A9A9A;
    font-family: Segoe UI;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top: 32px;
    margin-left: 646px;
}
.text-danger {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important;
    margin-left: 708px;
}
.text-danger1 {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important;
    margin-left: 708px;
}



</style>

    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="background-pink">
            <div class="background-image"></div> 
                 <h6 class="title5"> est content de vous voir </h6>
        </div> 
        <div class="faragh"></div>
           <a class="retour" href="{{ route('home.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
                   <path d="M21.2526 0.208984C9.6376 0.208984 0.210938 9.63565 0.210938 21.2506C0.210938 32.8657 9.6376 42.2923 21.2526 42.2923C32.8676 42.2923 42.2943 32.8657 42.2943 21.2506C42.2943 9.63565 32.8676 0.208984 21.2526 0.208984ZM28.6172 22.8288H17.6966L21.3157 26.4479C21.9259 27.0581 21.9259 28.0681 21.3157 28.6784C21.0001 28.994 20.6003 29.1413 20.2005 29.1413C19.8007 29.1413 19.4009 28.994 19.0853 28.6784L12.7728 22.3659C12.4793 22.0689 12.3147 21.6682 12.3147 21.2506C12.3147 20.8331 12.4793 20.4324 12.7728 20.1354L19.0853 13.8229C19.6955 13.2127 20.7055 13.2127 21.3157 13.8229C21.9259 14.4332 21.9259 15.4431 21.3157 16.0534L17.6966 19.6725H28.6172C29.4799 19.6725 30.1953 20.3879 30.1953 21.2506C30.1953 22.1134 29.4799 22.8288 28.6172 22.8288Z" fill="#FD6C6B"/>
                 </svg>
             </a>
           <div> <label class="title6">Avez-vous déja un compte?<a  class="lien"href="{{ route('login.show') }}" > -Connectez-vous ici</a> </label></div> 
          <h1 class="connectez-vous">Récupérer votre mot de passe</h1>

        <div class="form-group  ">
            <label class="title1">Adresse e-mail</label>

            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="   name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger ">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="title2" >Nom utilisateur</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="  Votre nom ici..." required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger ">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label class="title3">Mot de passe</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="  Votre mot de passe ici..." required="required">
            @if ($errors->has('password'))
                <span class="text-danger ">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group  ">
            <label  class="title4">Confirmation du mot passe</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="  Confirmer votre mot de passe ici..." required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

       <div class="form-group ">
      
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="agree_terms" id="agree_terms" value="1" {{ old('agree_terms') ? 'checked' : '' }}>
                <label class="form-check-label" for="agree_terms">
                 En créant mon compte j'accepte tous les termes d'utilisation
                </label>
            </div>
            @error('agree_terms')
                <span class="text-danger1">{{ $message }}</span>
            @enderror
            
       
        </div>
        <button class="btn register" type="submit">S'inscrire</button>

        
    </form>
@endsection