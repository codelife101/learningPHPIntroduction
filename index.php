<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-light">

    <div class="jumbotron mt-5">
      <h1 class="text-danger"> Lesson One intro to PHP </h1>
    </div>

    <br />
    <br />


    <?php

    echo '<h1 class="display-4  mt-5 text-primary">Yelling into a mountain range causes an echo HELLO</h1> <br />
    <br /> <h2>HELLO</h2> <br /> <h3>Hello</h3>    <br /> <h4>Hello</<h4>';

    print '<h1 class="display-4  mt-5 text-primary"> Printing takes longer than a echo </h1>';

    $myName = Jacob;
    $nicName = Jake;
    var_dump($myName);
    var_dump($nicName);
    echo '<h4 class="display-4  mt-5 text-primary">Hello my name is</h4>';
    echo ($myName. '<br>');
    echo 'You can call me ' . $nicName . '<br /> <br /> <br />';


    echo $myName.'s birthday is in July <br />';
    $a = 28;
    var_dump($a);
    echo '<br />';
    echo 'this year he will be ';
    echo $GLOBALS['a'], '<br />';

    for ($x = 1992; $x <= 2020; $x++) {
          echo 'The year is:'. $x .'<br>';
      }

      echo "<br />";

      $pokemon = array("Gengar","Dragonite","Ditto","Zapdos");

      echo 'Did you know that '.$nicName.'s favourite pokemon is '.$pokemon[0].'.';
      echo '<br />';
      echo ($pokemon[1]. ' is a dragon type pokemon and can fly really high.');

      echo "<br /> <br /> <br />";


      $g =67;
      $z =1000;
      $gengar = $pokemon[0];
      $zapdos = $pokemon[3];
      $ditto = $pokemon[2];
      $dragonite = $pokemon[1];

      function pokemonAge(){

        global $g, $z;
        $total = $g + $z;

        echo $GLOBALS['gengar'],'s age is ',$GLOBALS['g'];
        echo '<br />';
        echo $GLOBALS['zapdos'],'s age is ',$GLOBALS['z'];
        echo '<br />';
        echo 'The combined age of ',$GLOBALS[gengar], ' and ',$GLOBALS[zapdos], ' is '.$total.'.';
        echo '<br />';
        echo $GLOBALS['myName'],' has caught 3 pokemon. Their names are ' ,$GLOBALS['gengar'],', ',$GLOBALS[ditto],' and ',$GLOBALS['dragonite'],'.';
      }
      pokemonAge();


      echo '<br />';
      echo '<h1 class="display-4  mt-5 text-primary">Practicing PHP string functions</h1>';

      //strlen() out put the number of characters within the HttpQueryString

      echo strlen("strlen declears the number of characters in a given string");
      echo '<br />';
      echo strlen($pokemon[0]);
      echo '<br />';

      //str_word_count number of words within a given HttpQueryString
      echo 'There are. ', str_word_count("there are"),' words in the sentance and ', strlen("there are")," characters.";
      echo '<br />';
      echo 'When reversed the sentance "There are" looks like this. ', strrev("There are");
      echo '<br />';

      echo strpos("Hello everybody", "everybody");
      echo '<br />';
      //php intergers are a number of a non decimal type other wise a number with a decimal is called a float example

      $i = 456;
      var_dump(is_int($i));
      //returns true as 465 has no decimal place, meaning that it is a interger
      echo '<br />';
      //returns false as numbers with a deciaml place are classed as floats
      $f = 456.9;
      var_dump(is_int($f));
      echo '<br />';
      // the is_float function chacks to see if a number is a float so $f will return eio_truncate
      echo 'is the number 456.9 classed as a float? ', is_float($f) ;
      echo '<br />';
      echo 'is the number 456.9 classed as a float? ', var_dump(is_float($f)) ;
      echo '<br />';


      //is_numeric checks to see if a number is of a numeric array_count_values

      $n=3490321489032;
      var_dump(is_numeric($n));
      echo '<br />';

      $n="this should return false";
      var_dump(is_numeric($n));
      echo '<br />';

      //the function int() will turn a float value or sting value into an intergers
      //I think this will be useful for forms with number inputs as string values

      $i=345.5;
      $int_cast = (int)$i;
      echo $int_cast;
      echo '<br />';

      $i="37.43";
      $int_cast = (int)$i;
      echo $int_cast;
      echo '<br />';







     ?>


  </body>
</html>
