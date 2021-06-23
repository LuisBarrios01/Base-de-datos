<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@extends('app')
@section('content')

<h1 class="" style="color: #F4D03F;" >Equipos:</h1>
<h3 class="" style="color: #F4D03F; padding-left: 50px">Paraguay:</h3>

<div class="container">
<div class="card-group background-color: dark " style="max-width: 560rem; ">
  <div class="card">
    <img src="data:image/jpeg;base64,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" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Gerardo Ortiz</h5>
      <BR>
      <p class="card-text" style="color: #;">Portero</p>
      <p class="card-text" style="color: #;">32 Años</p>
      <p class="card-text" style="color: #;">Once Caldas</p>
      <a href="https://es.wikipedia.org/wiki/Gerardo_Am%C3%ADlcar_Ortiz">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Antony_Silva_France_2_juin_2017.jpg/220px-Antony_Silva_France_2_juin_2017.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Antony Silva</h5>
      <br>
      <p class="card-text" style="color: #;">Portero</p>
      <p class="card-text" style="color: #;">37 Años</p>
      <p class="card-text" style="color: #;">Club Puebla</p>
      <a href="https://es.wikipedia.org/wiki/Antony_Silva#:~:text=Antony%20Domingo%20Silva%20Cano%20(Asunci%C3%B3n,la%20Primera%20Divisi%C3%B3n%20de%20M%C3%A9xico.">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Alfredo_Aguilar_20180612.jpg/245px-Alfredo_Aguilar_20180612.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Alfredo Aguilar</h5>
      <br>
      <p class="card-text" style="color: #;">Portero</p>
      <p class="card-text" style="color: #;">32 Años</p>
      <p class="card-text" style="color: #;">Club Olimpia Asuncion</p>
      <a href="https://es.wikipedia.org/wiki/Alfredo_Aguilar">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Gustavo-gomez-palmeiras-wikipedia.png/250px-Gustavo-gomez-palmeiras-wikipedia.png" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Gustavo Gomez</h5>
      <br>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">28 Años</p>
      <p class="card-text" style="color: #;">Palmeiras</p>
      <a href="https://es.wikipedia.org/wiki/Gustavo_G%C3%B3mez_Portillo">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Hertha_BSC_vs._West_Ham_United_20190731_%28125%29.jpg/200px-Hertha_BSC_vs._West_Ham_United_20190731_%28125%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Fabian Balbuena</h5>
      <br>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">29 Años</p>
      <p class="card-text" style="color: #;">West Ham United</p>
      <a href="https://es.wikipedia.org/wiki/Fabi%C3%A1n_Balbuena">Mas Informacion</a>
    </div>
  </div>
</div>
<div class="card-group background-color: dark " style="max-width: 560rem; ">
  <div class="card">
    <img src="data:image/jpeg;base64,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" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Hector Martinez</h5>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">23 Años</p>
      <p class="card-text" style="color: #;">River Plate</p>
      <a href="https://es.wikipedia.org/wiki/David_Mart%C3%ADnez">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Palestino_-_River_Plate_20190424_30.jpg/250px-Palestino_-_River_Plate_20190424_30.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Robert Rojas</h5>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">25 Años</p>
      <p class="card-text" style="color: #;">River Plate</p>
      <a href="https://es.wikipedia.org/wiki/Robert_Rojas_Ch%C3%A1vez">Mas Informacion</a>
      
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Omar_Alderete_2019_%28cropped%29.jpg/245px-Omar_Alderete_2019_%28cropped%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Omar Alderete</h5>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">24 Años</p>
      <p class="card-text" style="color: #;">Hertha Berlin</p>
      <a href="https://es.wikipedia.org/wiki/Omar_Alderete">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/J%C3%BAnior_Alonso_20180612_%28cropped%29.jpg/220px-J%C3%BAnior_Alonso_20180612_%28cropped%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Junior Alonso</h5>
      <p class="card-text" style="color: #;">Defensa Central</p>
      <p class="card-text" style="color: #;">28 Años</p>
      <p class="card-text" style="color: #;">Atletico Mineiro</p>
      <a href="https://es.wikipedia.org/wiki/Junior_Alonso">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQi9vv88F2CF58EOt3jnVRbZds-R_fsnOee0kwzBPz_-RuhCTegN0Ymg_xoQXQa" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Santiago Arzamendia</h5>
      <p class="card-text" style="color: #;">Lateral Izquierdo</p>
      <p class="card-text" style="color: #;">23 Años</p>
      <p class="card-text" style="color: #;">Cerro PorteÃ±o</p>
      <a href="https://es.wikipedia.org/wiki/Santiago_Arzamendia">Mas Informacion</a>
    </div>
  </div>
</div>

<div class="card-group background-color: dark " style="max-width: 560rem; ">
  <div class="card">
    <img src="https://pbs.twimg.com/media/Es1QK0zUYAUiKwi.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Alberto Espinola</h5>
      <p class="card-text" style="color: #;">Lateral Derecho</p>
      <p class="card-text" style="color: #;">30 Años</p>
      <p class="card-text" style="color: #;">Cerro PorteÃ±o</p>
      <a href="https://es.wikipedia.org/wiki/Alberto_Esp%C3%ADnola#:~:text=Alberto%20Esp%C3%ADnola%20Gim%C3%A9nez%20(Caazap%C3%A1%2C%20Paraguay,con%20la%20selecci%C3%B3n%20de%20Paraguay.">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://depor.com/resizer/T0ZhUD3actaet0F-Evq-Av-7uGg=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/IIEZXJ3YYVDVPAMXXNIRGO2AHY.png" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Gaston Gimenez</h5>
      <p class="card-text" style="color: #;">Pivote</p>
      <p class="card-text" style="color: #;">29 Años</p>
      <p class="card-text" style="color: #;">Chicago Fire</p>
      <a href="https://es.wikipedia.org/wiki/Gast%C3%B3n_Gim%C3%A9nez">Mas Informacion</a>
      
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/InddelVal-Boca_%283%29.jpg/250px-InddelVal-Boca_%283%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Andres Cuba</h5>
      <p class="card-text" style="color: #;">Pivote</p>
      <p class="card-text" style="color: #;">25 Años</p>
      <p class="card-text" style="color: #;">Nimes Oplympique</p>
      <a href="https://es.wikipedia.org/wiki/Andr%C3%A9s_Cubas">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flamengo_v_Vasco_September_2018_IMG_4439_%2843805135645%29.jpg/250px-Flamengo_v_Vasco_September_2018_IMG_4439_%2843805135645%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Piris de Mota</h5>
      <p class="card-text" style="color: #;">Pivote</p>
      <p class="card-text" style="color: #;">26 Años</p>
      <p class="card-text" style="color: #;">Flamengo</p>
      <a href="https://es.wikipedia.org/wiki/Robert_Piris_da_Motta">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcR2SzRBrCKIhuta6e3CBNNGv4KiJwNZXogTMwnM_kZ64HsmCx5-sqPbTaBBJ-Lz" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">	Richard Sanchez</h5>
      <p class="card-text" style="color: #;">Mediocentro</p>
      <p class="card-text" style="color: #;">25 Años</p>
      <p class="card-text" style="color: #;">America</p>
      <a href="https://es.wikipedia.org/wiki/Richard_S%C3%A1nchez_(futbolista_paraguayo)">Mas Informacion</a>
    </div>
  </div>
</div>

<div class="card-group background-color: dark " style="max-width: 560rem; ">
  <div class="card">
    <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQfGrKgU2I6sSgNB0PuHH9KlG2lNU_gbqiAUR53gVP3IdelPyWyXsUsewQZpypA" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Mathias Villasanti</h5>
      <p class="card-text" style="color: #;">Mediocentro</p>
      <p class="card-text" style="color: #;">24 Años</p>
      <p class="card-text" style="color: #;">Cerro PorteÃ±o</p>
      <a href="https://es.wikipedia.org/wiki/Math%C3%ADas_Villasanti#:~:text=Math%C3%ADas%20Adalberto%20Villasanti%20Rol%C3%B3n%20(Caacup%C3%A9,la%20Primera%20Divisi%C3%B3n%20de%20Paraguay.">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuveum2xIqriT8KSk6lfX42s9x9lhtuW-PyKnM22cZ0lpUotakxeQIv_vCI88WbRj42U4&usqp=CAU" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Angel Cardozo</h5>
      <p class="card-text" style="color: #;">Mediocentro</p>
      <p class="card-text" style="color: #;">26 Años</p>
      <p class="card-text" style="color: #;">Cerro PorteÃ±o</p>
      <a href="https://es.wikipedia.org/wiki/%C3%81ngel_Cardozo_Lucena">Mas Informacion</a>
      
    </div>
  </div>
  <div class="card">
    <img src="https://tmssl.akamaized.net/images/foto/normal/jorge-morel-paraguay-2019-1602686155-49176.jpg?lm=1602686172" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Jorge Morel</h5>
      <p class="card-text" style="color: #;">Mediocentro</p>
      <p class="card-text" style="color: #;">23 Años</p>
      <p class="card-text" style="color: #;">Guarani</p>
      <a href="https://es.wikipedia.org/wiki/Jorge_Morel">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="data:image/jpeg;base64,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" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Braian Ojeda</h5>
      <p class="card-text" style="color: #;">Mediocentro</p>
      <p class="card-text" style="color: #;">20 Años</p>
      <p class="card-text" style="color: #;">Oplimpia de Asuncion</p>
      <a href="https://es.wikipedia.org/wiki/Braian_Ojeda">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/2018-08-19_-_Atlanta_United_-_Miguel_Almir%C3%B3n.jpg/250px-2018-08-19_-_Atlanta_United_-_Miguel_Almir%C3%B3n.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Miguel Almiron</h5>
      <p class="card-text" style="color: #;">Mediocentro Ofensivo</p>
      <p class="card-text" style="color: #;">27 Años</p>
      <p class="card-text" style="color: #;">Newcastle</p>
      <a href="https://es.wikipedia.org/wiki/Miguel_Almir%C3%B3n">Mas Informacion</a>
    </div>
  </div>
</div>

<div class="card-group background-color: dark " style="max-width: 560rem; ">
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Alejandro_Romero_20180612.jpg/245px-Alejandro_Romero_20180612.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Kaku</h5>
      <p class="card-text" style="color: #;">Mediocentro Ofensivo</p>
      <p class="card-text" style="color: #;">26 Años</p>
      <p class="card-text" style="color: #;">Taawon</p>
      <a href="https://es.wikipedia.org/wiki/Alejandro_Romero_Gamarra">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/%C3%93scar_Romero_20180612_%28cropped%29.jpg/250px-%C3%93scar_Romero_20180612_%28cropped%29.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Oscar Romero</h5>
      <p class="card-text" style="color: #;">Mediocentro Ofensivo</p>
      <p class="card-text" style="color: #;">28 Años</p>
      <p class="card-text" style="color: #;">San Lorenzo Almagro</p>
      <a href="https://es.wikipedia.org/wiki/%C3%93scar_Romero_Villamayor">Mas Informacion</a>
      
    </div>
  </div>
  <div class="card">
    <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTig-Yef6kNDNg3ekzofLjaObltamNxiH1IvnkyrOwAd-KKs8W2ryNjjqFG8cKB" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
      <h5 class="card-title" style="color: #F4D03F;">Braian Samudio</h5>
      <p class="card-text" style="color: #;">Extremo Izquierdo</p>
      <p class="card-text" style="color: #;">25 Años</p>
      <p class="card-text" style="color: #;">Rizerpor</p>
      <a href="https://es.wikipedia.org/wiki/Braian_Samudio">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://media.gettyimages.com/photos/julio-enciso-paraguay-picture-id650488246?s=612x612" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Julio Enciso</h5>
      <p class="card-text" style="color: #;">Extremo Derecho</p>
      <p class="card-text" style="color: #;">17 Años</p>
      <p class="card-text" style="color: #;">Atalanta de Bergamo</p>
      <a href="https://es.wikipedia.org/wiki/Julio_Enciso">Mas Informacion</a>
    </div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/RomeroCorinthians2018A.jpg/245px-RomeroCorinthians2018A.jpg" class="card-img-top" width="20px" height="180px">
    <div class="card-body">
    <h5 class="card-title" style="color: #F4D03F;">Angel Romero</h5>
      <p class="card-text" style="color: #;">Extremo Derecho</p>
      <p class="card-text" style="color: #;">28 Años</p>
      <p class="card-text" style="color: #;">Libertad Asuncion</p>
      <a href="https://es.wikipedia.org/wiki/%C3%81ngel_Romero_Villamayor">Mas Informacion</a>
    </div>
  </div>
</div>
</div>
