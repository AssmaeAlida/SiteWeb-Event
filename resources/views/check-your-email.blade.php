<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Your Email</title>
    <style>
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
.connectez-vous{
    color: #FD6C6B;
    font-family: Segoe UI;
    font-size: 49px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-left: 829px;
    margin-top: 138px;
    } 
.paragraph{
    color: #000;
    font-family: Segoe UI;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 722.03px;
    margin-top: 102.5px;
}
.button-container{
    color: #000;
    font-family: Segoe UI;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 722.03px;
    margin-top: 102.5px;
}
.btn-email{
    font-family: Segoe UI;
    font-size: 18.55px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    color: white;
    width: 320px;
    height: 47px;
    flex-shrink: 0;
    border-radius: 8px;
    background: #FD6C6B;
    /*margin-top: -56.5px; */
    margin-top: 48.5px;
    margin-left: 725.5px;
    /* border-color: #FD6C6B; */
    border: none;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="background-pink">
            <div class="background-image"></div> 
                 <h6 class="title5"> est content de vous voir </h6>
        </div> 
    <div>
        <h1 class="connectez-vous">Vérifiez Votre Email</h1>
        <p class="paragraph">Un lien de vérification a été envoyé à votre adresse email. <br> Veuillez vérifier votre boîte de réception et suivre les instructions pour vérifier votre email.</p>
        
    <a class="email-button" href="https://mail.google.com">

    <button class="btn-email" href="https://mail.google.com">Accéder à la boîte de réception</button>
    </a>

    </div>
    </div>

</body>
</html>
