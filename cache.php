<?php
ob_start(); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Php-mysql-course by Academy-Soft-Intellect</title>

    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div>
          <img src="logo.png" alt="Software Academy Soft Intellect" />
        </div>
        <h1>PHP and MySQL Course Repository</h1>
        <p>Software Academy Soft Intellect</p>
        <ul>
          <li><a href="https://github.com/Academy-Soft-Intellect/PHP-MySQL-Course">View On <strong>GitHub</strong></a></li>
        </ul>
      </header>
      <section>
        <h2>Slides( HTML format)</h2>
        <ul class="slideList">
          <?php
          $exclude = ['.', '..'];


          $LECTURES_PATH = "./pages/slides";
          $lectures = scandir($LECTURES_PATH);
          
          foreach($lectures as $lecture ){
              if(!in_array($lecture, $exclude) && is_dir($LECTURES_PATH."/".$lecture)){
                  ?>
                  <li>
                    <a href="pages/slides/<?=$lecture?>/<?=$lecture?>.html"><?=$lecture?></a>
                    <?php
                    if(file_exists($LECTURES_PATH."/".$lecture."_links.html")){
                        echo "<div class='lectures-links'><h4>Links</h4>";
                        echo file_get_contents($LECTURES_PATH."/".$lecture."_links.html");
                        echo "</div>";
                    }
                    ?>
                  </li>
                  <?php

              }
          }
          ?>
        </ul>

        <h2>Examples( HTML format)</h2>
        <ul class="slideList">
          <?php
          $examples = scandir("./examples");
          
          foreach($examples as $example ){

            if( !in_array($example, $exclude) && is_dir("./examples/".$example) ){

              $files = scandir("./examples/".$example);
              sort($files, SORT_NATURAL );
              $cnt = 0;
              $spacer = 10;

              foreach($files as $file ){

                $ext = strrchr($file, '.');
                if(!in_array($file, $exclude) && in_array($ext, ['.html', '.php', '.sql'])){

                  if($cnt === 0){
                    echo '<li><a href="https://github.com/Academy-Soft-Intellect/PHP-MySQL-Course/tree/master/examples/'.$example.'">'.$example.'</a> </li> ';
                  }

                  echo '<li>';
                  echo '<a style="padding-left:'.( $spacer*5).'px" href="https://github.com/Academy-Soft-Intellect/PHP-MySQL-Course/tree/master/examples/'.$example.'/'.$file.'">'.$file.'</a>';
                  echo ' <a href="http://course.mraiur.com/examples/'.$example.'/'.$file.'">( <b>view</b> )</a> ';
                  echo '</li>';
                  $cnt++;
                }
              }
            }
          }
          ?>
        </ul>
      </section>
      <footer>
        <p>This project is maintained by <br /><a href="https://github.com/Academy-Soft-Intellect">Academy-Soft-Intellect</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
  </body>
</html>
<?php
$cache_string = ob_get_contents();
ob_end_clean();


echo $cache_string;
$fileHandler = fopen(getcwd().'/index.html', 'w+');
fwrite($fileHandler, $cache_string);
fclose($fileHandler);
//file_put_contents(__DIR__'./index.html', $cache_string);
?>
