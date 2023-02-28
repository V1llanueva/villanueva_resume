<!DOCTYPE html>
<html lang="en">

<head>
  <title>Villanuevas Resume</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: lightskyblue;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      position: relative;
      width: 100%;
      max-width: 1000px;
      min-height: 1000px;
      background: white;
      margin: 50px;
      display: grid;
      grid-template-columns: 1fr 2fr;
      box-shadow: 0 35px 55px rgba(0, 0, 0, 0.1);
    }

    .container .left_Side {
      position: relative;
      background: #003147;
      padding: 40px;
    }

    .profileText {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding-bottom: 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .profileText .imgBx {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      overflow: hidden;
    }

    .profileText .imgBx img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profileText h2 {
      color: white;
      font-size: 1.2em;
      margin-top: 20px;
      text-transform: uppercase;
      text-align: center;
      font-weight: 600;
      line-height: 1.4em;
    }

    .profileText h2 span {
      font-size: 0.8em;
      font-weight: 300;
    }

    .contactInfo {
      padding-top: 40px;
    }

    .title {
      color: white;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 1px;
      margin-bottom: 20px;
    }

    .contactInfo ul {
      position: relative;
    }

    .contactInfo ul li {
      position: relative;
      list-style: none;
      margin: 10px 0;
      cursor: pointer;
    }

    .contactInfo ul li .icon {
      display: inline-block;
      width: 30px;
      font-size: 18px;
      color: gray;
    }

    .contactInfo ul li span {
      color: white;
      font-weight: 300;
    }

    .contactInfo.education li {
      margin-bottom: 10px;
    }

    .contactInfo.education h5 {
      color: gray;
      font-weight: bold;
    }

    .contactInfo.education h4 {
      color: white;
      font-weight: lighter;
    }

    .contactInfo.achievements h4 {
      color: white;
      font-weight: lighter;
    }

    .container .right_Side {
      position: relative;
      background: #fff;
      padding: 40px;
    }

    .about {
      margin-bottom: 30px;
    }

    .about:last-child {
      margin-bottom: 0;
    }

    .title2 {
      color: black;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }

    p {
      color: #333;
      text-align: justify;
      text-indent: 50px;
    }

    .about .box {
      display: flex;
      flex-direction: row;
      margin: 20px 0;
    }

    .about .box .year_company {
      min-width: 150px;
    }

    .about .box .year_company h5 {
      text-transform: uppercase;
      color: gray;
      font-weight: bold;
    }

    .skills .box{
      position: relative;
      width: 100%;
      display: grid;
      grid-template-columns: 150px 1fr;
      align-items: center;
      justify-content: center;
    }
    .skills .box h4{
      text-transform: uppercase;
      color: gray;
      font-weight: 500%;
    }
    .skills .box .percent{
      positon: relative;
      width: 100%;
      height: 100%;
      background: #f0f0f0;
    }
    .skills .box .percent div{
      position: relative;
      top: 0;
      left: 0;
      height: 100%;
      background: #03a9f4;
    }
    .interest ul{
      display: grid;
      grid-template-columns: repeat(4,0.5fr);
    }
    .interest ul li{
      list-style: none;
      color: #333;
      font-weight: 500;
      margin: 10px 0;
    }
    .interest ul li .fa{
      color: #03a9f4;
      font-size: 18px;
      width: 20px;
    }
    @media (max-width: 1000px)
    {
      .container
      {
        margin: 10px;
        grid-template-columns: repeat(1,1fr);
      }
      .interest ul{
        grid-template-columns: repeat(2,1fr);
      }
    }
    .about .thing {
      text-transform: uppercase;
      color: gray;
      font-weight: bold;
    }

    .about .text2 h5 {
      color: #333;
      margin-left: 10px;
      font-size: small;
      font-weight: 400;
    }

    .signature h4 {
      color: black;
      font-size: larger;
      font-weight: bold;
      text-transform: uppercase;
      text-align: end;
      margin-top: 70px;
    }

    .signature h6{
      color: #333;
      font-size: small;
      font-weight: 1em;
      text-align: end;
      margin-right: 100px;
      margin-top: none  ;
    }

    @media (max-width:1000px){
      .container{
        margin:10px;
        grid-template-columns: repeat(1,1fr);
      }
    }

    @media (max-width:600px){
      .about .box{
        flex-direction: column;
      }
      .about .box .year_company{
        margin-bottom: 5px;
      }
    }

  </style>


</head>

<body>
  <div class="container">
    <div class="left_Side">
      <div class="profileText">
        <div class="imgBx">
          <img class="pic" src="source/images/resume.jpeg" alt="pic" width="250px" height="250px">
        </div>
        <h2>Villanueva, SannyBoy<br><span>Web & Game Developer</span></h2>
      </div>

      <div class="contactInfo">
        <h3 class="title">Contact Info</h3>
        <ul>
          <li>
            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <span class="text">+(63)9451343940</span>
          </li>
          <li>
            <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <span class="text">bsit.villanuevasannyboy</span>
          </li>
          <li>
            <span class="icon"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
            <span class="text">@villanueva.121</span>
          </li>
          <li>
            <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
            <span class="text">@sannyboy_villanueva</span>
          </li>
          <li>
            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <span class="text">Alaminos, Laguna</span>
          </li>
        </ul>
      </div>

      <div class="contactInfo education">
        <h3 class="title">education</h3>
        <ul>
          <li>
            <h5>2008 - 2014</h5>
            <h4>De Mesa Elementary School</h4>
          </li>
          <li>
            <h5>2014 - 2018</h5>
            <h4>Ibayiw National Highschool</h4>
          </li>
          <li>
            <h5>2018 - 2020</h5>
            <h4>Ama Computer learning Center</h4>
          </li>
          <li>
            <h5>2020 - Present</h5>
            <h4>Pamantasan ng Lunsod ng San Pablo</h4>
          </li>
        </ul>
      </div>

      <div class="contactInfo achievements">
        <h3 class="title">achievements</h3>
        <ul>
          <li>
            <h4></h4>
            <h4></h4>
          </li>
        </ul>
      </div>
    </div>

    <div class="right_Side">
      <div class="about">
        <h2 class="title2">About me</h2>
        <p>Hi there! My name is Sanny Boy C Villanueva, and I'm currently a 20-year-old student pursuing a Bachelor of Science in Information Technology. I'm specializing in web game development, which is a field that I find incredibly fascinating and rewarding. I'm proud to be studying at Pamantasan ng Lungsod ng San Pablo, which is a great institution that offers top-notch education and opportunities for growth. I'm excited to continue learning and honing my skills in this field, and I can't wait to see where my education and passion take me in the future.</p>
      </div>

      <div class="about">
        <h2 class="title2">Experience</h2>
        <div class="box">
          <div class="year_company">
            <h5>September - 2022</h5>
            <h5>Brother International </br> Philippines.</h5>
          </div>
          
        </div>
      </div>

      <div class="about skills">
        <h2 class="title2">Professional Skills</h2>
        <div class="box">
          <h4>HTML</h4>
          <div class="percent">
            <div style="width: 85%;"></div>
          </div>
        </div>
        <div class="box">
          <h4>CSS</h4>
          <div class="percent">
          <div style="width: 75%;"></div>
          </div>
        </div>
        <div class="box">
          <h4>PHP</h4>
          <div class="percent">
          <div style="width: 55%;"></div>
          </div>
        </div>
        <div class="box">
          <h4>JAVASCRIPT</h4>
          <div class="percent">
          <div style="width: 15%;"></div>
          </div>
        </div>
      </div>
    <div class="about interest">
    <h2 class="title3"> Interest</h2>
    <ul>
      <li><i class="fa fa-futbol-o" aria-hidden="true"></i>Basketball</li>
      <li><i class="fa fa-gamepad" aria-hidden="true"></i>Gaming</li>
      <li><i class="fa fa-cutlery" aria-hidden="true"></i>Cooking</li>
      <li><i class="fa fa-music" aria-hidden="true"></i>Music</li>
    </ul>
  </div>
      <div class="about">
        <h2 class="title2">Character Reference</h2>
        <p>I hereby certify that above information is certified true and correct to the best of my knowledge and beliefs.</p>
      </div>

      <div class="signature">
        <h4>VILLANUEVA, SANNY BOY C.</h4>
        <h6>Applicant</h6>
      </div>
    </div>

</body>

</html>