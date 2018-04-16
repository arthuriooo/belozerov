<?php 

// include('./class/DB.php');

$infooo = '';

foreach($_SERVER as $key => $value){
$infooo.= '$_SERVER["'.$key.'"] = '.$value."<br />";
}

$ipaddress = $_SERVER['REMOTE_ADDR'];
$page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
$datetime = date("F j, Y, g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];

// DB::query('INSERT INTO ips VALUES (\'\', :ipx, :timex, :browserx)', array(':ipx'=>$ipaddress, ':timex'=>$datetime, ':browserx'=>$useragent));

// $con=mysqli_connect("localhost","","","");
// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// Perform queries 
// mysqli_query($con,"INSERT INTO ips (ipx, timex, browserx) VALUES ($ipaddress, $datetime, $useragent)");

// mysqli_close($con);


$mail = '';
$valid = false;

$tf = false;

$choice = '';
$note = '';

$to = 'arthuriooo@yandex.ru';
$subject = '';
$subject_topic = '';
$message = '';
$messageOrig = '';
$messageSpam = '<!DOCTYPE html>
<html>
  <head>
    <title>Belozerov</title>
    <meta charset="utf-8">
  </head>
  <body style="font-family: arial; padding: 0;">
    <table 
    style="padding: 15px 30px;
           margin: 0 auto;
           border: 20px solid gold;
           background: url(http://arthuriooo.ru/texture2.png);"
    cellpadding="0" 
    cellspacing="0" 
    width="800" >

      <tr><td style="padding: 10px"></td></tr>

      <tr 
      style="" 
      width="100%" 
      align="center">
        <td width="20%"></td>
        <td width="60%"
            style="font-weight: 600;
                 border-radius: 15px;
                   padding: 5px 12px;
                   font-size: 30px;
                   line-height: 50px;
                   text-transform: uppercase;
                   background-color: RGBA(239, 205, 53, 0.7);
                   color: white;
                   border: 3.5px solid white">
          B E L O Z E R O V
        </td>
        <td width="20%"></td>
      </tr>

      <tr>
        <td></td>
        <td style="padding: 10px; 
               color:white; 
               font-size: 20px;" 
          align="center">mail <small>by</small> ARTHURIOOO</td>
        <td></td>
      </tr>

      <tr><td style="padding: 6px"></td></tr>

      <tr 
      style="" 
      width="100%"
      align="center">
        <td width="20%"></td>
        <td width="60%"
            style="border-radius: 15px;
                   padding: 10px 12px;
                   font-size: 25px;
                   line-height: 25px;
                   text-transform: uppercase;
                   background-color: RGBA(239, 205, 53, 0.7);
                   color: white;
                   border: 3px solid white">
          <small style="">Запрос</small><br> на доработку
        </td>
        <td width="20%"></td>
      </tr>

      <tr><td style="padding: 15px;"></td></tr>

      <tr>
        <td></td>
        <td style="font-size: 20px; 
                 color: white; 
                 text-align: center;">если письмо отображается неправильно, то поймите и простите</td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px"></td></tr>

      <tr>
        <td></td>
        <td style="text-align: center; 
               color: white; 
               font-weight: 800; 
               font-size: 40px; 
               text-transform: uppercase;">made by<br>arthuriooo</td>
        <td></td>
      </tr>

      <tr><td style="padding: 20px"></td></tr>

    </table>
  </body>
</html>';

$messageForMe = "<p>Кто-то зашел на сайт -.-</p><br><p>IP Address : ".$ipaddress."</p><br><p>Current Page : ".$page."</p><br><p>Current Time : ".$datetime."</p><br><p>Browser : ".$useragent."</p><br><br><br>".$infooo."<br>";

$headers = "From: Belozerov Site<arthuriooo@arthuriooo.ru>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$headersSpam = "From: ОТВЕТКАААААА <huy@vam.vrot>\r\n";
$headersSpam .= "MIME-Version: 1.0\r\n";
$headersSpam .= "Content-Type: text/html; charset=UTF-8\r\n";

mail('arthuriooo@yandex.ru','Belozerov',$messageForMe, $headers);

if (isset($_POST['email'])) {
  $mail = htmlspecialchars($_POST['email']);
  if ($mail == 'arthuriooo@yandex.ru') {
    $valid = true;
  } else {
    mail($mail, "СПАМ?? НЕ В ЭТОТ РАЗ!", $messageSpam, $headersSpam);
    mail('arthuriooo@yandex.ru', 'СПААААААААМ', $mail, $headerSpam);
    $valid = false;
  }
}

if (isset($_POST['issue'])) {
  $choice = 'issue';
  $subject = 'Новое замечание';
  $subject_topic = 'Замечание';

  $tf = true;

  // sendNote();

  $note = htmlspecialchars($_POST['note']);

  // mail($to, $subject, $message, $headers);
}
if (isset($_POST['todo'])) {
  $choice = 'todo';
  $subject = 'Новый запрос на доработку';
  $subject_topic = '<small>Запрос</small><br> на доработку';

  $tf = true;

  // sendNote();

  $note = htmlspecialchars($_POST['note']);
  // mail($to, $subject, $message, $headers);
}

if ($tf && $valid) {
  $message = '
  <!DOCTYPE html>
<html>
  <head>
    <title>Belozerov</title>
    <meta charset="utf-8">
  </head>
  <body style="font-family: arial; padding: 0;">
    <table 
    style="padding: 15px 30px;
           margin: 0 auto;
           border: 20px solid gold;
           background: url(http://arthuriooo.ru/texture2.png);"
    cellpadding="0" 
    cellspacing="0" 
    width="800" >

      <tr><td style="padding: 10px"></td></tr>

      <tr 
      style="" 
      width="100%" 
      align="center">
        <td width="20%"></td>
        <td width="60%"
            style="font-weight: 600;
                 border-radius: 15px;
                   padding: 5px 12px;
                   font-size: 30px;
                   line-height: 50px;
                   text-transform: uppercase;
                   background-color: RGBA(239, 205, 53, 0.7);
                   color: white;
                   border: 3.5px solid white">
          B E L O Z E R O V
        </td>
        <td width="20%"></td>
      </tr>

      <tr>
        <td></td>
        <td style="padding: 10px; 
               color:white; 
               font-size: 20px;" 
          align="center">mail <small>by</small> ARTHURIOOO</td>
        <td></td>
      </tr>

      <tr><td style="padding: 6px"></td></tr>

      <tr 
      style="" 
      width="100%"
      align="center">
        <td width="20%"></td>
        <td width="60%"
            style="border-radius: 15px;
                   padding: 10px 12px;
                   font-size: 25px;
                   line-height: 25px;
                   text-transform: uppercase;
                   background-color: RGBA(239, 205, 53, 0.7);
                   color: white;
                   border: 3px solid white">
          <small style="">'.$subject_topic.'
        </td>
        <td width="20%"></td>
      </tr>

      <tr><td style="padding: 10px;"></td></tr>

      <tr 
      style="font-size: 25px" 
      width="80%" 
      align="center">
        <td></td>
        <td style="color: white;">
          '.$note.'
        </td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px;"></td></tr>

      <tr>
        <td></td>
        <td style="border-radius: 15px;
                   padding: 10px 10px;
                   font-size: 18px;
                   line-height: 25px;
                   text-transform: uppercase;
                   background-color: RGBA(255, 84, 165, 0.6);
                   text-align: center;">
              <a href="arthuriooo.ru" style="text-decoration: none; color: white;"><small>перейти на</small><br>arthuriooo.ru</a>
          </td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px;"></td></tr>

      <tr>
        <td></td>
        <td style="border-radius: 15px;
                   padding: 10px 10px;
                   font-size: 18px;
                   line-height: 25px;
                   text-transform: uppercase;
                   background-color: RGBA(255, 84, 165, 0.6);
                   text-align: center;">
              <a href="arthuriooo.ru" style="text-decoration: none; color: white;"><small>перейти на</small><br>trello.com</a>
          </td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px;"></td></tr>

      <tr>
        <td></td>
        <td style="font-size: 20px; 
                 color: white; 
                 text-align: center;">если письмо отображается неправильно, то поймите и простите</td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px"></td></tr>

      <tr>
        <td></td>
        <td style="text-align: center">
          <a href="" style="color: RGBA(255, 84, 165, 1.00); 
                    font-size: 30px">пойти нахуй</a>
        </td>
        <td></td>
      </tr>

      <tr><td style="padding: 10px"></td></tr>

      <tr>
        <td></td>
        <td style="text-align: center; 
               color: white; 
               font-weight: 800; 
               font-size: 40px; 
               text-transform: uppercase;">made by<br>arthuriooo</td>
        <td></td>
      </tr>

      <tr><td style="padding: 20px"></td></tr>

    </table>
  </body>
</html>
';
  mail($to, $subject, $message, $headers);
} 


?>

<!DOCTYPE html>
<html>
  <head>
    <link href="http://allfont.ru/allfont.css?fonts=lane-narrow" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <title>Belozerov</title>

    <link rel="stylesheet" href='normalize.css'>
    <script src='jquery-3.1.1.js'></script>

    <link rel="stylesheet" href="style.css">
    <script src='script.js'></script>
    <!-- <script src='center.js'></script> -->
  </head>

    <body>
      <header>
        <div class="logo">
          <p>Alexandr Belozerov<br/>photography</p>
        </div>
        <div class="menu">
          <ul>
            <li><a href="#" id='homeButton' class='dark'>home</a></li>
            <li><a href="#" id='worksButton' class='dark'>works</a></li>
            <li><a href="#" id='contactButton' class='dark'>contact</a></li>
          </ul>
        </div>
      </header>


      <div id="home">

      </div>

      <div id="works">

        <div class="main">
          <!-- ---- -->
          <div class="left">
            <img src="./left2.png">
          </div>
          <!-- -- -- -->
          <div class="center">
            <div class="photo">
              <img class='pic' id="pic1" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic2" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic3" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic4" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic5" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic6" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic7" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic8" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic9" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic10" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic11" src=""></img>
            </div>
            <div class="photo">
              <img class='pic' id="pic12" src=""></img>
            </div>
          </div>
          <!-- -- -- -->
          <div class="right">
            <img src="./right2.png">
          </div>

        </div>
        <!-- ---- -->

        <div id="slider">
          <div class="preview">
            <img id="img1" src="./pho2.png"/>
          </div>
          <div class="controls">
            <div class="nextPhoto">
              <img src="./next.png" class="next"></img>
            </div>
            <div class="prevPhoto">
              <img src="./previous.png" class="previous"></img>
            </div>
            <div class="closePhoto">
              <img src="./x3.png" class="close"></img>
            </div>
          </div>
        </div>


        <!-- ---- -->
        <footer>
          <p>moscow<br/>2018</p>
        </footer>

      </div>
      

      <div id="contact">
        <div id="noteField">
          <form action="index.php" method="post" id='sendIssue'>
            <textarea id="emailfield" rows='1' name="email" placeholder="email"></textarea>
            <textarea id="notetext" rows='12' name="note" placeholder="замечание или запрос"></textarea>
            <div>
              <input type="submit" name="issue" value="ЗАМЕЧАНИЕ" onclick='iss()'>
              <input type="submit" name="todo" value="ЗАПРОС НА ДОРАБОТКУ" onclick='tod()'>
            </div>
          </form>
        </div>
      </div>

    </body>

</html>




