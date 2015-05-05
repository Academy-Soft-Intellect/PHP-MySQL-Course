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
          <li><a href="pages/slides/01-Introduction-into-Course/01-Introduction-into-Course.html">01-Introduction-into-Course</a></li>
          <li><a href="pages/slides/01-Introduction-into-Development/01-Introduction-into-Development.html">01-Introduction-into-Development</a></li>
          <li><a href="pages/slides/01-Introduction-into-PHP/01-Introduction-into-PHP.html">01-Introduction-into-PHP</a></li>
          <li><a href="pages/slides/01-Version-Control-Systems/01-Version-Control-Systems.html">01-Version-Control-Systems</a></li>
          <li><a href="pages/slides/02-HTML-basics/02-HTML-basics.html">02-HTML-basics.html</a></li>
        </ul>

        <h2>Examples( HTML format)</h2>
        <ul class="slideList">
          <?php
          $examples = scandir("./examples");
          $exclude = ['.', '..'];
          foreach($examples as $example ){
            
            if( !in_array($example, $exclude) ){
              
              $files = scandir("./examples/".$example);
              sort($files, SORT_NATURAL );
              $cnt = 0;
              $spacer = 10;
              
              foreach($files as $file ){
              
                $ext = strrchr($file, '.');
                if(!in_array($file, $exclude) && in_array($ext, ['.html', '.php'])){
                  
                  if($cnt === 0){
                    echo '<li><a href="https://github.com/Academy-Soft-Intellect/PHP-MySQL-Course/tree/master/examples/'.$example.'">'.$example.'</a> </li> ';  
                  }

                  echo '<li>';
                  echo '<a style="padding-left:'.( $spacer*5).'px" href="https://github.com/Academy-Soft-Intellect/PHP-MySQL-Course/tree/master/examples/'.$example.'/'.$file.'">'.$file.'</a>';
                  echo ' <a href="examples/'.$example.'/'.$file.'">( <b>view</b> )</a> ';
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