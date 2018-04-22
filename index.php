<!DOCTYPE html>
<html>
<head>
    <title>ООО Современные Технологии</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="/jquery_3.1.1.min.js"></script>
    <script src="parallax/parallax.js"></script>
    <link rel="stylesheet" href="gg.css" type="text/css" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:300,400,500,700" rel="stylesheet">
    <script type="text/javascript">
    $(document).ready(function() {
      $("#ancor_script_one").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top -59;
        $('body, html').animate({scrollTop: top}, 700);
      });
    });
  </script>
  <script type="text/javascript" language='javascript'>
  function call() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: 'mail.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
            $('#results').fadeIn(500).delay(1000).fadeOut(500);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
    }
</script>
</head>
<body>
    <div id="ancor_script_one" class="header">
      <ul>
        <li><a href="#b1">ГЛАВНАЯ</a></li>
        <li><a href="#b2">О НАС</a></li>
        <li><a href="#b3">КОНТАКТЫ</a></li>
        <li><a href="#b4">КАК НАС НАЙТИ</a></li>
      </ul>
    </div>
    <div id="b1" class="parallax-window" data-parallax="scroll" data-image-src="pictures/kot2.png">
        <div class="ff">
        <div class="ga">
          <h1>ООО СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</h1>
          <h2>НА РЫНКЕ С 2012 ГОДА</h2>
      </div>
        </div>
    </div>
    <div id="b2" class="fa">
        <h2><strong>О НАС</strong></h2>
        <hr />
        <h3>ОСНОВНЫЕ ВИДЫ ДЕЯТЕЛЬНОСТИ</h3>
        <div class="grid">
          <figure class="effect-sadie">
            <img src="pictures/1.jpg" alt="img01"/>
            <figcaption>
              <h2>Ремонт <span>и техническое ослуживание</span></h2>
              <p>Подробное описание. <br>Которое придумаете самостоятельно.</p>

            </figcaption>
          </figure>
          <figure class="effect-sadie">
            <img src="pictures/2.jpeg" alt="img02"/>
            <figcaption>
              <h2>Монтаж <span>инженерного оборудования</span></h2>
              <p>Подробное описание. <br>Которое придумаете самостоятельно.</p>

            </figcaption>
          </figure>
          <figure class="effect-sadie">
            <img src="pictures/3.jpg" alt="img03"/>
            <figcaption>
              <h2>Общестроительные <span>работы</span></h2>
              <p>Подробное описание. <br>Которое придумаете самостоятельно.</p>
            </figcaption>
          </figure>
        </div>
    </div>
    <div id="b3" class="ha">
        <div class="oa">
          <h2><strong>НАШИ КОНТАКТЫ</strong></h2>
          <hr />
          <div class="text">
            <p>121309 Москва ул. Ростокинская д.5 к.1 кв.3</p>
            <p>Москва Ленинский пр-т д.129 к.2</p>
            <p>Телефон: 8-499-755-90-34</p>
            <p>SovremennieTehnologii@gmail.com</p>
          </div>
          <div class="ja">
          <form id="formx" method="post" action="javascript:void(null);" name="form" onsubmit="call()">
            <input type="text" name="name" placeholder="Тема сообщения" required /><br />
            <input type="email" name="email"  placeholder="Укажите Ваш Email" required /><br />
            <input type="text" name="phone"  placeholder="Укажите Ваш телефон" required /><br />
            <textarea name="textarea" placeholder="Ваше сообщение" ></textarea>
            <input  id="button"  type="submit" name="submit" value="Отправить" />
          </div>
          <div class="res">
          <div id="results" class="results">
          </div>
          </div>
          <div class="la">
            <h2><strong>НАС ЛЕГКО НАЙТИ</strong></h2>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2240.628945689337!2d37.66232640328095!3d55.834399484197064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b53681d8aafd43%3A0x164c40d74b5adce1!2z0KDQvtGB0YLQvtC60LjQvdGB0LrQsNGPINGD0LsuLCA1INC60L7RgNC_0YPRgSAxLCDQnNC-0YHQutCy0LAsIDEyOTEyOA!5e0!3m2!1sru!2sru!4v1519193774348" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <div id="b4" class="ka">
        <div class="cop">
          <p>&copy; ООО Современные технологии 2018 Все права защищены</p>
        </div>
    </div>
</body>
</html>
