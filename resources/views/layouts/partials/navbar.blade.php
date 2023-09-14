  @auth
    <header class="p-3 text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
        
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <div class="logo"></div>
             
              </ul>
        
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control " placeholder="Search..." aria-label="Search">
              </form>
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        </div>
        <div class="titles">
        <h1 class="title1">Pour les gens qui aiment sortir de leurs routines!!</h1>
        <h3 class="title2">L’endroit idéal pour vous défouler et trouver vos intérêts!</h3>
         <a href="{{ route('organizer.registration') }}" class="btn create-event">Créer un événement</a> 
        </div>
      </div>
    </header>
   @endauth


        @guest
        <header class="p-3 bg-transparent text-white">
          <div class="container">
      
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>
        
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <div class="logo"></div>
             
              </ul>
        
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control " placeholder="Search..." aria-label="Search">
              </form>
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn login">Login</a>
            <a href="{{ route('register.perform') }}" class="btn sing-up ">Sign-up</a>
          </div>
        </div>
        <div class="titles">
        <h1 class="title1">Pour les gens qui aiment sortir de leurs routines!!</h1>
        <h3 class="title2">L’endroit idéal pour vous défouler et trouver vos intérêts!</h3>
         <a href="{{ route('register.perform') }}" class="btn create-event">Créer un événement</a> 
        </div>
      </div>
  
    </header>
        @endguest


<style>
  /* background*/
.p-3{
    position: relative;
    width: 100%;
    height: 511px;
    background-image: url('{{ asset('images/Rectangle 86.png') }}');
    background-size: 100% auto; 
    background-repeat: no-repeat; 
}
/*
.p-3::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color:rgb(75 72 72 / 13%)
    z-index: 1; 
}*/
  /* boutton sing-up*/
    .sing-up{
    width: 143px;
    height: 47px;
    border-radius: 10px;
    background: #FD6C6B;
    color: #FFF;
    font-size: 18.55px;
    font-weight: 700;
  }
    /* boutton sing-in*/
.login {
  color: #FFF;
  font-family: Segoe UI;
  font-size: 18.55px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}
  /* search*/
.form-control {
  width: 630px;
  height: 47px;
  flex-shrink: 0;
  border-radius: 8px;
  border: 1px solid #9A9A9A;
  background-color: rgba(255, 255, 255, 0.21);
  margin-left: -724px;

}
  /* logo*/
.logo{
  background-image: url('{{ asset('images/Group 196.png') }}');
  width: 219px;
  height: 75px;
  margin-left: -41px;
  margin-top:-46px;
}
  /* title1:Pour les gens qui aiment sortir de leurs routines!!*/
.title1{
  color: #FFF;
  font-family: Montserrat;
  font-size: 43.174px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  margin-left: 125px;
  margin-top: 120px;
}
  /* title2:L’endroit idéal pour vous défouler et trouver vos intérêts!*/

.title2{
  color: #FFF;
  font-family: Montserrat;
  font-size: 30.011px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  margin-left: 233px;
  margin-top: 13px;
}
  /* boutton: créér un evenement*/

.create-event {
    width: 252px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #FD6C6B;
    color: #FFF;
    font-family: Segoe UI;
    font-size: 18.55px;
    font-style: normal;
    font-weight: 700;
    margin-left: 525px;
    margin-top: 37px;
}
</style>