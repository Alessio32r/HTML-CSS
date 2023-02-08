<?php
$info = [
    [
        'name' => 'Доильщик змей',
        'dateStart' => 'Aug 2016',
        'dateEnd' => 'May 2023',
        'work_description' => 'Работа, как это понятно по названию, заключается в извлечении яда из змей и других рептилий. Надой затем применяется в фармакологических исследованиях и в производстве лекарств. В частности, змеиный яд может использоваться для снижения артериального давления и профилактики тромбоза.',
    ],
    [
        'name' => 'Живое пугало',
        'dateStart' => 'Aug 2016',
        'dateEnd' => 'May 2019',
        'work_description' => 'В обязанности пугала входит не допускать приземления куропаток на рапсовое поле площадью в 10 акров. Рабочая униформа Джейми выглядит следующим образом: ярко-оранжевое пальто, аккордеон и коровий колокольчик.',
    ],
    [
        'name' => 'Вылавливатель велосипедов',
        'dateStart' => 'Aug 2015',
        'dateEnd' => 'May 2016',
        'work_description' => 'Амстердам - это велосипедная столица мира. А также город, в котором очень много каналов. Приплюсуйте сюда то, что здесь легализованы некоторые наркотики, а голландское пиво имеет крепость 8%, и вы поймете, что названные средства передвижения регулярно оказываются в водных артериях этого населённого пункта.Они нанимаются государством и с помощью манипулятора, установленного на барже, достают со дна всё, что попадает в их гидравлическую лапу.',
    ],
    [
        'name' => 'Легальный грабитель',
        'dateStart' => 'Aug 2001',
        'dateEnd' => 'May 2015',
        'work_description' => 'Джим Стикли начал грабить банки в 1992 году и сделал это уже более тысячи раз. Об этом все знают, но никому даже в голову не приходит посадить этого человека в тюрьму. Дело в том, что он на самом деле тестирует системы охраны финансовых учреждений. О грядущем ограблении знает только вышестоящее начальство, обычные же банковские служащие понятия не имеют, что он их проверяет. Чаще всего Стикли прибегает к обману - переодевшись техническим работником, он просит персонал отвести его в денежное хранилище. Он может прикинуться пожарным, дезинсектором, водопроводчиком, электриком.',
    ],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://kartinkin.net/uploads/posts/2022-03/1648193790_66-kartinkin-net-p-khitrii-lis-kartinki-74.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Имя</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <?php for ($i=0; $i<count($info); $i++): ?>
        <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $info[$i]['name']?></b></h5>
            <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right">
            </i><?php echo $info[$i]['dateStart']?> -
            <?php if ($i == 0):?> 
              <span class="w3-tag w3-teal w3-round"><?php echo $info[$i]['dateEnd']?></span>
            <?php else:?> 
              <?php echo $info[$i]['dateEnd']?>
              <?php endif;?>
            </h6>
            <p><?php echo $info[$i]['work_description']?></p>
            <hr>
          </div>  
        <?php endfor;?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>