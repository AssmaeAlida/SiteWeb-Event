@extends('layouts.auth-master')

@section('content')
<style>
  .details{
      margin-left: 1047px;
      margin-top: -643px;
  }
  .card-img-top{
      width: 715px;
      height: 521px;
      flex-shrink: 0;
      border-radius: 9px;
      margin-left: 82px;
      margin-top: 20px;
  }
.title1{
color: #000;
font-family: Segoe UI;
font-size: 36.469px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-left: 115px;
margin-top: 45px;
}
.title2{
  color: #000;
  font-family: Segoe UI;
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.title3{
  color: #000;
font-family: Segoe UI;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;

}
.btn-ticket{
  width: 367px;
  height: 47px;
  flex-shrink: 0;
  border-radius: 8px;
  background: #FD6C6B;
  border: none;
  color: #FFF;
  font-family: Montserrat;
  font-size: 18.55px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}

.paragraph{
  
  width: 1208px;
  height: 216px;
  flex-shrink: 0;
  color: #9A9A9A;
  font-family: Segoe UI;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  margin-left: 112px;

}
.title6{
  color: #9A9A9A;
  font-family: Segoe UI;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}
.items{
  line-height: normal;
}

.items1{
  line-height: normal;
}
.items2{
  line-height: normal;

}
.items3{
  line-height: normal;

}

.vertical-carousel {
  transform: rotate(-90deg);
  transform-origin: right top;
}

.vertical-carousel .carousel-inner {
  display: flex;
  flex-direction: row;
  transform: rotate(90deg);
  transform-origin: left top;
  width: calc(100vh - 160px); /* Ajustez cette valeur en fonction de la hauteur de votre carrousel */
}

.vertical-carousel .carousel-inner .carousel-item {
  width: 100%;
  height: 100%;
  transition: transform 0.6s ease-in-out;
}

.vertical-carousel .carousel-inner .carousel-item.active {
  transform: translateY(-100%);
}

</style>
  

<div class="container">
     <h1 class="title1">Titre de l'événement</h1>
  <div class="card-image">
     <img class="card-img-top" src="{{ asset('images/Rectangle 42.png') }}" alt="Card image cap">
  </div>
  
  <div id="carouselExample" class="carousel slide vertical-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/Rectangle 42.png') }}" alt="Card image cap" class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Rectangle 44.png') }}" alt="Card image cap"class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Rectangle 44.png') }}" alt="Card image cap" class="d-block w-100" >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  






  <div class="details">
    <div class="items">
     <h4 class="title2">Nom d'organisateur</h4>
     <h6 class="title6">Adab Mouatassim</h6>
    </div> 
   <div  class="items1">
     <h4 class="title3">Date de l'événement</h4>
     <h6 class="title6">Adab Mouatassim</h6>
   </div>
   <div class="items2">
     <h4 class="title4">L'endroit de l'événement</h4>
     <h6 class="title6">Adab Mouatassim</h6>
   </div>
   <div class="items3">
     <h4 class="title5">Prix du ticket</h4>
     <h6 class="title6">Adab Mouatassim</h6>
   </div>

   <div>
    <button class="btn-ticket">Obtenir un ticket</button>
    </div>

  </div>

  <div class="description">

  </div>
</div>  
@endsection
