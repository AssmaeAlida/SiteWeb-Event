@extends('layouts.auth-master')

@section('content')
<style>
.title1{
    color: #000;
    font-family: Segoe UI;
    font-size: 36.469px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
}
.title2{
   color: #9A9A9A;
   text-align: center;
   font-family: Segoe UI;
   font-size: 16px;
   font-style: normal;
   font-weight: 400;
   line-height: normal;  
}
.title3{
    color: #000;
   font-family: Segoe UI;
   font-size: 25.011px;
   font-style: normal;
   font-weight: 600;
   line-height: normal;
}
.title4{
    color: #9A9A9A;
    text-align: center;
    font-family: Segoe UI;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.img-profil{
    width: 47px;
    height: 47px;
    flex-shrink: 0;
     
}
.navbar-nav {
    margin-top: 29px;
    margin-left: 820px;
}
.titles {
    margin-left: 41px;
    margin-top: 19px;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,-0.25rem);
    margin-right: auto;
    margin-left: auto;
}
.card{
   width: 630px;
   height: 383px;
   flex-shrink: 0;
   border-radius: 10px;
   background: rgba(255, 214, 216, 0.11);
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);
   margin-top: 128px;
   margin-left: 31px;
}
.icon-create {
    margin-top: 90px;
    margin-left: -1px;
}
.card1{
    width: 210px;
   height: 117px;
   flex-shrink: 0;
   border-radius: 10px;
   background: #FFE2E4;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   margin-top: 20px;

}
.card2{
    width: 210px;
   height: 117px;
   flex-shrink: 0;
   border-radius: 10px;
   background: #FFE2E4;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   margin-top: 20px;

}
.card3{
    width: 210px;
   height: 117px;
   flex-shrink: 0;
   border-radius: 10px;
   background: #FFE2E4;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   margin-top: 20px;

}
.card4{
    width: 210px;
   height: 117px;
   flex-shrink: 0;
   border-radius: 10px;
   background: #FFE2E4;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   margin-top: 20px;

}
.card2{
    width: 210px;
   height: 117px;
   flex-shrink: 0;
   border-radius: 10px;
   background: #FFE2E4;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   margin-top: -104px;
    margin-left: -11px;}
.all-events{
    margin-left: 806px;
    margin-top: -402px;
}
.all-reservation{
    margin-left: 806px;
    margin-top: 31px;
}
.all-activities{
    margin-top: -404px;
    margin-left: 1106px;
}
.all-archivés{
    margin-top: 55px;
    margin-left: 1106px;
}
.number{
 
    color: #FFF;
    font-family: Segoe UI;
    font-size: 36.469px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-top: 33px;

}
.titre5{
    color: #000;
font-family: Segoe UI;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.titre6{
    color: #9A9A9A;
font-family: Segoe UI;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: normal;
}
.group1{
    margin-left: -315px;
    margin-top: 9px;
}
.group2{
    margin-left: -311px;
    margin-top: 15px;
    
}
.group3{
    margin-top: 11px;
    margin-left: -5px;
}
.group4{
    margin-top: 13px;
}
.title5{
    color: #000;
    font-family: Segoe UI;
    font-size: 36.469px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-left: -850px;
    margin-top: 119px;
}
.form-control{
    margin-left: 106px;
    margin-top: 55px;
    width: 443px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 8px;
    border: 1px solid #9A9A9A;
    background: rgba(255, 255, 255, 0.21);
}
.dropdown {
    margin-top: -47px;
    margin-left: 874px;
    width: 174px;
}
.dropdown1 {
    margin-top: -47px;
    margin-left: 1064px;
    width: 174px
}
.table {
    margin-left: 93px;
    width: 1150px;
    height: 757px;
    flex-shrink: 0;
    border-radius: 6px;
    background: var(--white, #FFF);

    /* Shadow 2 */
    box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.12);
    margin-top: 60px;
    --bs-table-bg: transparent;
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #212529;
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: #212529;
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: #212529;
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    margin-bottom: 1rem;
    color: #212529;
    vertical-align: top;
    border-color: #dee2e6;
}





</style>

<div class="container">

    <nav class="navbar navbar-expand-lg ">
     <div class="container-fluid">
      <div class="titles" >
        <h1 class="title1">Hello Assmae!</h1>
        <h5 class="title2">Soyez les bienvenus chez MyEvent!!</h5>
      </div>  
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
            <a class="nav-link" href='/'>
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none">
                    <rect width="47" height="47" rx="6" fill="#FFE2E4"/>
                    <path d="M20.4695 10.3121C20.0195 10.4021 19.8508 10.9421 20.177 11.2571L23.5634 14.6434C23.9234 14.9922 24.5196 14.7447 24.5196 14.2497V12.2921C29.526 12.7871 33.5874 16.5897 34.4649 21.4836C34.5549 22.0011 35.0274 22.3611 35.5562 22.3611C36.2537 22.3611 36.7824 21.7199 36.6587 21.0336C35.2749 13.2484 27.6022 8.73704 20.4695 10.3121ZM23.1134 32.3514C23.0356 32.2721 22.9359 32.2178 22.8271 32.1955C22.7183 32.1733 22.6053 32.1839 22.5026 32.2262C22.3999 32.2685 22.3122 32.3405 22.2506 32.4329C22.1891 32.5254 22.1565 32.6341 22.1571 32.7451V34.7027C17.1507 34.2077 13.0894 30.4051 12.2118 25.5112C12.1218 24.9937 11.6493 24.6337 11.1206 24.6337C10.423 24.6337 9.89429 25.2749 10.018 25.9612C11.4131 33.7464 19.0858 38.2577 26.2184 36.6827C26.6572 36.5815 26.8372 36.0527 26.5109 35.7264L23.1134 32.3514Z" fill="#FD6C6B"/>
                  </svg>
            </a>
            <a class="nav-link" href="#">
            <svg  class="icon-notification" xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none">
                <rect width="47" height="47" rx="6" fill="#FFE2E4"/>
                <path d="M32.5855 26.6144L31.4154 24.6721C31.1697 24.2392 30.9474 23.4201 30.9474 22.9404V19.9801C30.946 18.6743 30.5749 17.3956 29.8771 16.292C29.1793 15.1883 28.1833 14.3048 27.0042 13.7436C26.7033 13.2093 26.2644 12.7656 25.7334 12.4589C25.2023 12.1522 24.5987 11.9938 23.9855 12.0002C22.7101 12.0002 21.5634 12.6905 20.955 13.7787C18.6733 14.9137 17.0937 17.2655 17.0937 19.9801V22.9404C17.0937 23.4201 16.8714 24.2392 16.6257 24.6604L15.4439 26.6144C14.9759 27.3984 14.8706 28.2642 15.1631 29.0599C15.4439 29.8438 16.1109 30.4522 16.9767 30.7448C19.2467 31.517 21.6336 31.8914 24.0206 31.8914C26.4075 31.8914 28.7945 31.517 31.0644 30.7565C31.8835 30.4873 32.5153 29.8672 32.8195 29.0599C33.1237 28.2525 33.0418 27.3632 32.5855 26.6144ZM27.3085 33.0732C27.0624 33.7544 26.6126 34.3433 26.0202 34.7598C25.4277 35.1764 24.7214 35.4005 23.9972 35.4017C23.0728 35.4017 22.1601 35.0272 21.5166 34.3603C21.1422 34.0093 20.8614 33.5412 20.6976 33.0615C20.8497 33.0849 21.0018 33.0966 21.1656 33.12C21.4347 33.1551 21.7155 33.1902 21.9963 33.2136C22.6633 33.2721 23.3419 33.3072 24.0206 33.3072C24.6875 33.3072 25.3544 33.2721 26.0097 33.2136C26.2554 33.1902 26.5011 33.1785 26.7351 33.1434L27.3085 33.0732Z" fill="#FD6C6B"/>
              </svg>
             </a>
            <a class="nav-link" href="#">
               <img class="img-profil" src="{{ asset('images/human.png') }}" alt="">
            </a>
         </div>   
       </div>
     </div>
   </nav>
   <div class="card">
    <a  href="#">
    <svg class="icon-create" xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97" fill="none">
        <rect width="97" height="97" rx="10" fill="#FEC2C5" fill-opacity="0.43"/>
        <path d="M68.329 70H29.6132C28.7313 70 28 69.2687 28 68.3868C28 67.505 28.7313 66.7737 29.6132 66.7737H68.329C69.2109 66.7737 69.9422 67.505 69.9422 68.3868C69.9422 69.2687 69.2109 70 68.329 70ZM64.0703 30.17C59.8976 25.9973 55.8109 25.8897 51.5306 30.17L48.9281 32.7726C48.713 32.9876 48.6269 33.3318 48.713 33.6329C49.5356 36.4557 51.0568 39.0254 53.1358 41.1045C55.2148 43.1835 57.7846 44.7047 60.6074 45.5273C60.7598 45.5772 60.9231 45.5835 61.079 45.5455C61.2348 45.5075 61.3769 45.4267 61.4892 45.3122L64.0703 42.7096C66.1996 40.6018 67.2321 38.5584 67.2321 36.4936C67.2536 34.3642 66.2212 32.2994 64.0703 30.17ZM56.7358 47.4803C56.112 47.1792 55.5098 46.878 54.929 46.5339C54.4573 46.2529 53.998 45.9515 53.5525 45.6305C53.1868 45.3939 52.7566 45.0498 52.348 44.7056C52.2163 44.6097 52.0939 44.5017 51.9823 44.383C51.2725 43.7808 50.4767 43.0064 49.7669 42.1461C49.7024 42.1031 49.5948 41.9525 49.4443 41.7589C49.2292 41.5008 48.8635 41.0707 48.5409 40.5759C48.2343 40.1714 47.9541 39.7475 47.7021 39.3069C47.3579 38.7262 47.0568 38.1455 46.7557 37.5432C46.7109 37.4469 46.6672 37.3501 46.6245 37.2528C46.3061 36.5366 45.3705 36.328 44.8177 36.8807L32.4953 49.2031C32.2157 49.4827 31.9576 50.0205 31.8931 50.3861L30.7316 58.624C30.5165 60.0866 30.9252 61.4632 31.8286 62.388C32.6029 63.1408 33.6783 63.5495 34.8398 63.5495C35.0979 63.5495 35.356 63.528 35.6141 63.485L43.8735 62.3235C44.2607 62.259 44.7984 62.0009 45.0565 61.7213L57.3638 49.4161C57.9231 48.8568 57.7101 47.8997 56.9853 47.5878C56.902 47.5522 56.8188 47.5163 56.7358 47.4803Z" fill="#FD6C6B"/>
    </svg>
    </a>
     <h3 class="title3">Créer un nouveau événement</h3> 
     <h6 class="title4">Créer votre nouveau événement en modifiant les tous 
        plus petits détails</h6>
   </div>
  <div class="cards">
    <div class="all-events">
        <div class="card1"></div>
        <div class="card2">
           <label class="number">13</label> 
        </div>
        <div class="group1">
           <h3 class="titre5">Total des événements</h3>
            <h5 class="titre6">Dans les dernières 30j </h3>
         </div>
    </div>
    <div class="all-reservation">
        <div class="card1"></div>
        <div class="card2">
            <label class="number">13</label> 
        </div>
        <div class="group2">
            <h3 class="titre5">Total des réservations</h3>
          </div>

    </div>
    <div class="all-activities">
        <div class="card1"></div>
        <div class="card2">
            <label class="number">13</label> 
        </div>
        <div class="group3">
            <h3 class="titre5">Total des activités</h3>
          </div>
    </div>
    <div class="all-archivés">
        <div class="card1"></div>
        <div class="card2">
            <label class="number">13</label> 
        </div>
        <div class="group4">
            <h3 class="titre5">Total des archivés</h3>
          </div>
    </div>
  
    </div>
    <div>
 </div>
 <div>
    <h3 class="title5">Liste des événements</h3>
    <form class="d-flex" role="search">
        <input class="form-control " type="search" placeholder="  Search..." aria-label="Search">
        <!-- <button class="btn" type="submit">Search</button> -->
    </form>
    <div class="dropdown" >
        <button class="btn dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; height: 47px; flex-shrink: 0; border-radius: 8px; border: 1px solid #9A9A9A; background: rgba(255, 255, 255, 0.21);">
            Trier par date
        </button>
        <div class="dropdown-menu" aria-labelledby="sortDropdown">
            <a class="dropdown-item" href="#">Date la plus récente</a>
            <a class="dropdown-item" href="#">Date la plus ancienne</a>
        </div>
    </div>
    <div class="dropdown1" >
        <button class="btn dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; height: 47px; flex-shrink: 0; border-radius: 8px; border: 1px solid #9A9A9A; background: rgba(255, 255, 255, 0.21);">
            Trier par prix
        </button>
        <div class="dropdown-menu" aria-labelledby="sortDropdown">
            <a class="dropdown-item" href="#">Date la plus récente</a>
            <a class="dropdown-item" href="#">Date la plus ancienne</a>
            <a class="dropdown-item" href="#">Date la plus récente</a>
            <a class="dropdown-item" href="#">Date la plus récente</a>

        </div>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Description</th>
          <th scope="col">Nombre de réservation</th>
          <th scope="col">Date de lancement</th>
          <th scope="col">Date d'expiration</th>
           <th scope="col">Actions</th>


         </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <th scope="row">1</th>
          <td>Evénement sportif</td>
          <td>23</td>
          <td>07/08/2023</td>
          <td>08/08/2023</td>
          <td>
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
              <path d="M14.9069 0H6.10354C2.27964 0 0 2.2785 0 6.1005V14.889C0 18.7215 2.27964 21 6.10354 21H14.8964C18.7203 21 21 18.7215 21 14.8995V6.1005C21.0105 2.2785 18.7308 0 14.9069 0ZM9.40219 16.2855C9.09753 16.59 8.51975 16.884 8.09954 16.947L5.51525 17.3145C5.4207 17.325 5.32615 17.3355 5.23161 17.3355C4.80089 17.3355 4.40169 17.1885 4.11805 16.905C3.77138 16.5585 3.62431 16.0545 3.70835 15.498L4.07603 12.915C4.13906 12.4845 4.4227 11.9175 4.73786 11.613L9.4232 6.93C9.59015 7.40033 9.8012 7.85385 10.0535 8.2845C10.1586 8.463 10.2741 8.631 10.3687 8.757C10.4842 8.9355 10.6208 9.1035 10.7048 9.198C10.7574 9.2715 10.7994 9.324 10.8204 9.345C11.083 9.66 11.3877 9.954 11.6503 10.1745C11.7238 10.248 11.7659 10.29 11.7869 10.3005C11.9445 10.4265 12.102 10.5525 12.2386 10.647C12.4067 10.773 12.5748 10.8885 12.7534 10.983C12.9635 11.109 13.1946 11.2245 13.4257 11.34C13.6673 11.445 13.8879 11.5395 14.1085 11.613L9.40219 16.2855ZM16.1465 9.5445L15.1801 10.521C15.1497 10.5512 15.1136 10.5751 15.0739 10.5913C15.0343 10.6075 14.9918 10.6157 14.9489 10.6155C14.9174 10.6155 14.8754 10.6155 14.8544 10.605C13.7991 10.2992 12.8383 9.73169 12.0614 8.95514C11.2844 8.1786 10.7166 7.21828 10.4107 6.1635C10.3792 6.048 10.4107 5.922 10.4947 5.8485L11.4717 4.872C13.0685 3.276 14.5918 3.3075 16.1571 4.872C16.9554 5.67 17.3441 6.4365 17.3441 7.2345C17.3336 7.9905 16.9449 8.7465 16.1465 9.5445Z" fill="#FD6C6B"/>
            </svg>
           <svg xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 19 24" fill="none">
             <path d="M1.30159 20.8254C1.30159 22.2571 2.47302 23.4286 3.90476 23.4286H14.3175C15.7492 23.4286 16.9206 22.2571 16.9206 20.8254V7.80952C16.9206 6.37778 15.7492 5.20635 14.3175 5.20635H3.90476C2.47302 5.20635 1.30159 6.37778 1.30159 7.80952V20.8254ZM16.9206 1.30159H13.6667L12.7425 0.37746C12.5083 0.143175 12.1698 0 11.8314 0H6.39079C6.05238 0 5.71397 0.143175 5.47968 0.37746L4.55556 1.30159H1.30159C0.585714 1.30159 0 1.8873 0 2.60317C0 3.31905 0.585714 3.90476 1.30159 3.90476H16.9206C17.6365 3.90476 18.2222 3.31905 18.2222 2.60317C18.2222 1.8873 17.6365 1.30159 16.9206 1.30159Z" fill="#FD6C6B"/>
           </svg>
          </td>
        </tr>
        
     
       
     </tbody>
    </table>
 </div>
 
</div>

@endsection