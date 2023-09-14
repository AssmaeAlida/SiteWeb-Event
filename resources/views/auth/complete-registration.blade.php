@extends('layouts.auth-master')

@section('content')
<style>
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

.form-control {
      display: block;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #F5F5F5;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      width: 610px;
      height: 47px;
      flex-shrink: 0;
      border-radius: 10px;
      margin-top: 5px;
      margin-left:642.5px;
    }
 .connectez-vous{
     color: #FD6C6B;
     font-family: Segoe UI;
     font-size: 40px;
     font-style: normal;
     font-weight: 700;
     line-height: normal; 
     margin-left: 600px;
     margin-top: 79px;
    

}
.retour{
    margin-left:-9px;
    margin-top: 9px;

}
.faragh{
    height: 20px;
}
.form-label{
  
    color: #000;
    font-family: Segoe UI;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin-left: 139.03px;
    margin-top: 53.5px;
  
}
.terminer{
    color: white;
    width: 610px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 8px;
    background: #FD6C6B;
    margin-top: 50.5px;
    margin-left: 599.5px;
    color: #FFF;
    font-family: Segoe UI;
    font-size: 18.55px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.title3{
    color: #9A9A9A;
font-family: Segoe UI;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-left: 622px;
}
.form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 42.5em;
    margin-bottom: .125rem;
}
 

.form-check-label{
    margin-right: 102px;
    margin-top: 38px;
    margin-left: -48px;
}
.form-check-input{
    margin-top:43px;
}
/* la bouton ignorer*/
.return{
    color: #000;
    font-family: Segoe UI;
    font-size: 18.55px;
    font-style: normal;
    font-weight: 400;
    line-height: 3;
    margin-left: 602px;
}
.invalid-feedback{
    margin-left: 139px;
}
</style>

<div class="container">
    <div class="background-pink">
        <div class="background-image"></div> 
           <h6 class="title4"> est content de vous voir! </h6>
    </div> 
                  
    <form method="POST" action="{{ route('organizer.complete.registration') }}">
        @csrf
        <div>
            <div class="faragh"></div>
              <a class="retour" href="{{ route('login.show') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
                    <path d="M21.2526 0.208984C9.6376 0.208984 0.210938 9.63565 0.210938 21.2506C0.210938 32.8657 9.6376 42.2923 21.2526 42.2923C32.8676 42.2923 42.2943 32.8657 42.2943 21.2506C42.2943 9.63565 32.8676 0.208984 21.2526 0.208984ZM28.6172 22.8288H17.6966L21.3157 26.4479C21.9259 27.0581 21.9259 28.0681 21.3157 28.6784C21.0001 28.994 20.6003 29.1413 20.2005 29.1413C19.8007 29.1413 19.4009 28.994 19.0853 28.6784L12.7728 22.3659C12.4793 22.0689 12.3147 21.6682 12.3147 21.2506C12.3147 20.8331 12.4793 20.4324 12.7728 20.1354L19.0853 13.8229C19.6955 13.2127 20.7055 13.2127 21.3157 13.8229C21.9259 14.4332 21.9259 15.4431 21.3157 16.0534L17.6966 19.6725H28.6172C29.4799 19.6725 30.1953 20.3879 30.1953 21.2506C30.1953 22.1134 29.4799 22.8288 28.6172 22.8288Z" fill="#FD6C6B"/>
                </svg>
              </a>
              <h1 class="connectez-vous">Veuillez nous donner votre email</h1>
              <h4 class="title3">Pour pouvoir créer vos propres événements!</h4>
            </div>
            <div >
                 <label for="phone_number" class="form-label">{{ __('Numéro de téléphone') }}</label>
                 <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror"  placeholder="  Votre n° de téléphone ici..." name="phone_number" required autofocus>

                @error('phone_number')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>

            <div class="form-group ">
                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree_terms" id="agree_terms" value="1" {{ old('agree_terms') ? 'checked' : '' }}>
                    <label class="form-check-label" for="agree_terms">
                     En créant mon compte j'accepte tous les termes d'utilisation
                    </label>
                </div>
                @error('agree_terms')
                  <span class="text-danger">{{ $message }}</span>
                 @enderror          
             </div>

            <div class="form-group">
                 <button type="submit" class="btn terminer">
                   {{ __('Se connecter') }}
                </button>
            </div>
            <div class="form-group">
             <a href="/" class="return">Ignorer</a>  
               </button>
           </div>
    
     </form>
</div>
            
@endsection