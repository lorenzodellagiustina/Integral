<?php
  $Title = "Integrazione di funzioni razionali fratte";
  $Date = "17/04/2021";
  $Class = "5<sup>a</sup> LSA B";
  echo '<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <title>
      '.$Title.'
    </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
      (function($) {
          $(document).ready(function(){
              $(window).scroll(function(){
                  if ($(this).scrollTop() > 250) {
                      $(\'#navbar\').fadeIn(500);
                  } else {
                      $(\'#navbar\').fadeOut(500);
                  }
              });
          });
      })(jQuery);
    </script>
  </head>
  <body>
    <div id="blackBackground">
    </div>
    <div id="titleBackground">
    </div>
    <div id="title">'.$Title.'
      <div style="color:#BDBDBD;font-size:15px;">Della Giustina Lorenzo, Hasa Matteo &emsp;&emsp;&emsp; '.$Class.' &emsp;&emsp; '.$Date.'</div>
    </div>
    <div id="navbar">
			<div id="navTitle">'.$Title.'
			</div>
			<div id="navDate">'.$Date.'
			</div>
			<div id="navName">
				Della Giustina Lorenzo, Hasa Matteo
			</div>
		</div>
    <div id="content">
      <div id="ph1">
        <div id="phTitle"><b>COSA FA?</b></div>
        Trova l\'integrale di una funzione razionale fratta:
        <center>&#8747; <div class="frac"><span>N(x)</span><span class="symbol">/</span><span class="bottom">D(x)</div> dx,</center>
        dove il numeratore N(x) e il denominatore D(x) sono dei polinomi.
      </div>
      <div id="ph2">
        <div id="phTitle"><b>INPUT</b></div>
        <form method="post" action="index.php">
          N(x): <input type="number" name="n5" ';
          if (isset($_POST['n5'])) {
            echo 'value="'.$_POST['n5'].'"';
          }
          echo '> x<sup>5</sup> + <input type="number" name="n4" ';
          if (isset($_POST['n4'])) {
            echo 'value="'.$_POST['n4'].'"';
          }
          echo '> x<sup>4</sup> + <input type="number" name="n3" ';
          if (isset($_POST['n3'])) {
            echo 'value="'.$_POST['n3'].'"';
          }
          echo '> x<sup>3</sup> + <input type="number" name="n2" ';
          if (isset($_POST['n2'])) {
            echo 'value="'.$_POST['n2'].'"';
          }
          echo '> x<sup>2</sup> + <input type="number" name="n1" ';
          if (isset($_POST['n1'])) {
            echo 'value="'.$_POST['n1'].'"';
          }
          echo '> x + <input type="number" name="n0" ';
          if (isset($_POST['n0'])) {
            echo 'value="'.$_POST['n0'].'"';
          }
          echo '><br>
          D(x): <input type="number" name="d5" ';
          if (isset($_POST['d5'])) {
            echo 'value="'.$_POST['d5'].'"';
          }
          echo '> x<sup>5</sup> + <input type="number" name="d4" ';
          if (isset($_POST['d4'])) {
            echo 'value="'.$_POST['d4'].'"';
          }
          echo '> x<sup>4</sup> + <input type="number" name="d3" ';
          if (isset($_POST['d3'])) {
            echo 'value="'.$_POST['d3'].'"';
          }
          echo '> x<sup>3</sup> + <input type="number" name="d2" ';
          if (isset($_POST['d2'])) {
            echo 'value="'.$_POST['d2'].'"';
          }
          echo '> x<sup>2</sup> + <input type="number" name="d1" ';
          if (isset($_POST['d1'])) {
            echo 'value="'.$_POST['d1'].'"';
          }
          echo '> x + <input type="number" name="d0" ';
          if (isset($_POST['d0'])) {
            echo 'value="'.$_POST['d0'].'"';
          }
          echo '>
          <br><br>
          <input type="submit" value="Calcola">
        </form>
      </div>
      <div id="ph1">';

  if (
    isset($_POST['n5']) && isset($_POST['n4']) && isset($_POST['n3']) && isset($_POST['n2']) && isset($_POST['n1']) && isset($_POST['n0'])
    &&
    isset($_POST['d5']) && isset($_POST['d4']) && isset($_POST['d3']) && isset($_POST['d2']) && isset($_POST['d1']) && isset($_POST['d0'])
  ) {
    $n[5] = $_POST['n5'];
    $n[4] = $_POST['n4'];
    $n[3] = $_POST['n3'];
    $n[2] = $_POST['n2'];
    $n[1] = $_POST['n1'];
    $n[0] = $_POST['n0'];
    $d[5] = $_POST['d5'];
    $d[4] = $_POST['d4'];
    $d[3] = $_POST['d3'];
    $d[2] = $_POST['d2'];
    $d[1] = $_POST['d1'];
    $d[0] = $_POST['d0'];

    foreach ($n as $key => $value) {
      if ($n[$key] == "") {
        $n[$key] = 0;
      }
    }
    foreach ($d as $key => $value) {
      if ($d[$key] == "") {
        $d[$key] = 0;
      }
    }

    /*if ($n[3]=="") {
      $n[3] = 0;
    }
    if ($n[2]=="") {
      $n[2] = 0;
    }
    if ($n[1]=="") {
      $n[1] = 0;
    }
    if ($n[0]=="") {
      $n[0] = 0;
    }
    if ($d[3]=="") {
      $d[3] = 0;
    }
    if ($d[2]=="") {
      $d[2] = 0;
    }
    if ($d[1]=="") {
      $d[1] = 0;
    }
    if ($d[0]=="") {
      $d[0] = 0;
    }*/

    echo '
        <div id="phTitle"><b>OUTPUT</b></div>';


    //FUNCTIONS
      //DIVISIONE COME FRAZIONE
      function frac1($num, $den) {
        $gcd = gmp_gcd($num, $den);
        $num = $num / $gcd;
        $den = $den / $gcd;
        return '<div class="frac"><span>'.$num.'</span><span class="symbol">/</span><span class="bottom">'.$den.'</span></div>';
      }
      function frac2($n, $tolerance = 1.e-6) {
        $frac_temp = 0;
        if ($n < 0) {
          $n = -1 * $n;
          $frac_temp = 1;
        }
        $h1=1; $h2=0;
        $k1=0; $k2=1;
        $b = 1/$n;
        do {
            $b = 1/$b;
            $a = floor($b);
            $aux = $h1; $h1 = $a*$h1+$h2; $h2 = $aux;
            $aux = $k1; $k1 = $a*$k1+$k2; $k2 = $aux;
            $b = $b-$a;
        } while (abs($n-$h1/$k1) > $n*$tolerance);
        if ($k1 == 1) {
          if ($frac_temp == 1) {
            return '-'.$h1;
          } else {
            return $h1;
          }
        } elseif ($frac_temp == 1) {
          return '-<div class="frac"><span>'.$h1.'</span><span class="symbol">/</span><span class="bottom">'.$k1.'</span></div>';
        } else {
          return '<div class="frac"><span>'.$h1.'</span><span class="symbol">/</span><span class="bottom">'.$k1.'</span></div>';
        }
      }
      //STAMPA POLINOMIO
      function echo_pol($array) {
        ksort($array, 1);
        $array = array_reverse($array, true);
        $k = 0;
        foreach ($array as $key => $value) {
          if ($key == 0) {
            if ($value > 0 && $k == 1) {
              echo ' + '.frac2($value);
            } elseif (($value < 0 && $k == 1) || ($value != 0 && $k == 0)) {
              echo frac2($value);
            }
          } elseif ($key == 1) {
            if ($value > 0 && $k == 1) {
              echo ' + '.frac2($value).'x';
            } elseif (($value < 0 && $k == 1) || ($value != 0 && $k == 0)) {
              echo frac2($value).'x';
            }
          } else {
            if ($value > 0 && $k == 1) {
              echo ' + '.frac2($value).'x<sup>'.$key.'</sup>';
            } elseif (($value < 0 && $k == 1) || ($value != 0 && $k == 0)) {
              echo frac2($value).'x<sup>'.$key.'</sup>';
            }
          }
          $k = 1;
        }
      }
      //"PULIZIA" ARRAY POLINOMIALE
      function poly_cls($poly) {
        foreach ($poly as $key => $value) {
          if ($value == 0) {
            unset($poly[$key]);
          }
        }
        return $poly;
      }
      //GRADO
      function grado($array) {
        $grado = 0;
        $array = poly_cls($array);
        if (!empty($array)) {
          $grado = max(array_keys($array));
        }
        return $grado;
      }
      //SOMMA TRA POLINOMI
      function sum($array1, $array2) {
        $maxkey_array1 = max(array_keys($array1));
        $maxkey_array2 = max(array_keys($array2));
        for ($key = max($maxkey_array1, $maxkey_array2); $key >= 0; $key--) {
          if (!isset($array1[$key])) {
            $array1[$key] = 0;
          }
          if (!isset($array2[$key])) {
            $array2[$key] = 0;
          }
          $diff[$key] = $array1[$key] + $array2[$key];
        }
        return $diff;
      }
      //DIFFERENZA TRA POLINOMI
      function diff($array1, $array2) {
        $maxkey_array1 = max(array_keys($array1));
        $maxkey_array2 = max(array_keys($array2));
        for ($key = max($maxkey_array1, $maxkey_array2); $key >= 0; $key--) {
          if (!isset($array1[$key])) {
            $array1[$key] = 0;
          }
          if (!isset($array2[$key])) {
            $array2[$key] = 0;
          }
          $diff[$key] = $array1[$key] - $array2[$key];
        }
        return $diff;
      }
      //MOLTIPLICAZIONE TRA MONOMIO E POLINOMIO
      function molt($k, $key_k, $array) {
        foreach ($array as $key => $value) {
          $molt[$key + $key_k] = $value * $k;
        }
        return $molt;
      }
      //DIVISIONE TRA POLINOMI

        //QUOZIENTE
        function quoz($num, $den, $print) {
          if (grado(poly_cls($num)) == 0 && grado(poly_cls($num)) == 0) {
            $q[0] = $num[0] / $den[0];
            return $q;
          } else {
            $temp_prev = $num;
            $grado_temp = grado($num);
            $grado_den = grado($den);

            while ($grado_temp >= $grado_den) {
              $q[$grado_temp - $grado_den] = $temp_prev[$grado_temp] / $den[$grado_den];
              $temp = molt($q[$grado_temp - $grado_den], $grado_temp - $grado_den, $den);
              $temp = diff($temp_prev, $temp);
              $grado_temp = grado($temp);
              $temp_prev = $temp;
              unset($temp);
              $count = 1;
            }
            $q_temp = $q;
            unset($q);
            unset($temp_prev);
            unset($grado_temp);
            $temp_prev = $num;
            $grado_temp = grado($num);
            if ($print) {
              echo '
            <table>
              <tr class="quoz">
                <td class="quoz">';
              echo_pol($temp_prev);
              echo '
                </td>
                <td class="quoz">';
              echo_pol($den);
              echo '
                </td>
              </tr>';
            }
            $count = 0;
            while ($grado_temp >= $grado_den) {
              $q[$grado_temp - $grado_den] = $temp_prev[$grado_temp] / $den[$grado_den];
              $temp = molt($q[$grado_temp - $grado_den], $grado_temp - $grado_den, $den);
              if ($print) {
                if ($count == 0) {
                  echo '
              <tr class="quoz">
                <td class="quoz">
                  - (';
                  echo_pol($temp);
                  echo '
                  )
                </td>
                <td class="quoz">';
                  echo_pol($q_temp);
                echo '
                </td>
              </tr>';
                } else {
                  echo '
              <tr class="quoz">
                <td class="quoz">
                  - (';
                  echo_pol($temp);
                  echo '
                  )
                </td>
              </tr>';
                }
              }
              $temp = diff($temp_prev, $temp);
              $grado_temp = grado($temp);
              $temp_prev = $temp;
              unset($temp);
              if ($print) {
                echo '
                <tr class="quoz">
                  <td class="quoz">';
                $temp_prev = poly_cls($temp_prev);
                if (empty($temp_prev)){
                  echo '0';
                } else {
                  echo_pol($temp_prev);
                }
                echo '
                </td>
              </tr>';
              }
              $count = 1;
            }
            if ($print) {
              echo '
            </table>';
            }
            return $q;
          }
        }
        //RESTO
        function resto($num, $den) {
          if (grado(poly_cls($num)) == 0 && grado(poly_cls($num)) == 0) {
            $r[0] = 0;
            return $r;
          } else {
            $temp_prev = $num;
            $grado_temp = grado($num);
            $grado_den = grado($den);
            while ($grado_temp >= $grado_den) {
              $q[$grado_temp - $grado_den] = $temp_prev[$grado_temp] / $den[$grado_den];
              $temp = molt($q[$grado_temp - $grado_den], $grado_temp - $grado_den, $den);
              $temp = diff($temp_prev, $temp);
              $grado_temp = grado($temp);
              $temp_prev = $temp;
              unset($temp);
            }
            return $temp_prev;
          }
        }
        //DERIVATA DI UN POLINOMIO
        function der($poly) {
          $poly = poly_cls($poly);
          foreach ($poly as $key => $value) {
            if ($key != 0) {
              $der[$key - 1] = $value * $key;
            }
          }
          return $der;
        }
        //INTEGRALE DI UN POLINOMIO
        function integral($poly) {
          $poly = poly_cls($poly);
          foreach ($poly as $key => $value) {
            if ($key != -1) {
              $integral_poly[$key + 1] = $value / ($key + 1);
            } else {
              if ($value < 0) {
                $integral_ln = $value.' * ln|x|';
              } else {
                $integral_ln = ' + '.$value.' * ln|x|';
              }
            }
          }
          if (isset($integral_ln)) {
            return echo_pol($integral_poly).' '.$integral_ln;
          } else {
            return echo_pol($integral_poly);
          }
        }
    //TROVO IL GRADO DI N(x) E DI D(x)
      //N(x)
      $grado_n = grado($n);
      echo 'Il grado di N(x) &egrave; '.$grado_n.'.<br>';
      //D(x)
      $grado_d = grado($d);
      echo 'Il grado di D(x) &egrave; '.$grado_d.'.<br>';
    //grado_n >= grado_d
    if($grado_n >= $grado_d) {
      echo 'Il grado di N(x) &egrave; maggiore o uguale a quello di D(x).<br><br>';
      //CALCOLO IL QUOZIENTE Q(x) E IL RESTO R(x)
      echo 'Calcoliamo il quoziente e il resto della divisione polinomiale tra N(x) e D(x):<br><br>';
      $q = quoz($n, $d, true);
      $r = resto($n, $d);
      echo '<br>
          Q(x)=';
      echo_pol($q);
      echo '<br>
          R(x)=';
      echo_pol($r);
      echo '<br><br>
          Il rapporto
          <div class="frac">
            <span>
              N(x)
            </span>
            <span class="symbol">
              /
            </span>
            <span class="bottom">
              D(x)
            </span>
          </div>
          pu&ograve; essere scritto nel modo seguente:
          <center>
            Q(x) +
            <div class="frac">
              <span>
                R(x)
              </span>
              <span class="symbol">
                /
              </span>
              <span class="bottom">
                D(x)
              </span>
            </div>
             = ';
      echo_pol(poly_cls($q));
      echo ' +
            <div class="frac">
              <span>
                ';
      echo_pol(poly_cls($r));
      echo '
              </span>
              <span class="symbol">
                /
                </span>
                <span class="bottom">
                ';
      echo_pol(poly_cls($d));
      echo '
              </span>
              </div>
          </center>';
      //IL RESTO È LA DERIVATA DEL DENOMINATORE
      $r = poly_cls($r);
      $d = poly_cls($d);
      //print_r($r);
      //print_r(quoz(der($d), $r, false));
      //echo_pol(quoz($n, $d, false));

      if (count(poly_cls(quoz(der($d), $r, false))) <= 1 && empty(poly_cls(resto(der($d), $r)))) {
        echo '<br>
          Il resto è la derivata del denominatore:
          <center>
            D[';
        echo_pol($d);
        echo '] = ';
        echo_pol(der($d));
        if (poly_cls(quoz(der($d), $r, false))[0] != 1) {
          echo ' = '.frac2(poly_cls(quoz(der($d), $r, false))[0]).' * (';
          echo_pol($r);
          echo ')';
        }
        echo '
        </center>
        Quindi:
        <center>
          &#8747;
          <div class="frac">
            <span>
              ';
        echo_pol($r);
        echo '
            </span>
            <span class="symbol">
              /
            </span>
            <span class="bottom">
              ';
        echo_pol($d);
        echo '
            </span>
          </div>
          dx';
        if (poly_cls(quoz(der($d), $r, false))[0] != 1) {
          echo ' = '.frac2(poly_cls(quoz($r, der($d), false))[0]).' * &#8747; <div class="frac"><span>';
          echo_pol(der($d));
          echo '</span><span class="symbol">/</span><span class="bottom">';
          echo_pol($d);
          echo '</span></div> dx';
          echo ' = '.frac2(poly_cls(quoz($r, der($d), false))[0]).' * ln|';
        } else {
          echo ' = ln|';
        }
        echo_pol(poly_cls($d));
        echo '| + c
        </center>
        Quindi:
        <center>
          &#8747;
          <div class="frac">
            <span>
              ';
        echo_pol(poly_cls($n));
        echo '
            </span>
            <span class="symbol">
              /
            </span>
            <span class="bottom">
              ';
        echo_pol(poly_cls($d));
        echo '
            </span>
          </div>
          dx = &#8747; ';
        echo_pol(poly_cls($q));
        echo ' dx + &#8747;
          <div class="frac">
            <span>
              ';
        echo_pol(poly_cls($r));
        echo '
            </span>
            <span class="symbol">
              /
            </span>
            <span class="bottom">
              ';
        echo_pol(poly_cls($d));
        echo '
            </span>
          </div> dx = <b>';
        echo integral($q);
        if (poly_cls(quoz(der($d), $r, false))[0] != 1) {
          if (poly_cls(quoz($r, der($d), false))[0] >= 0) {
            echo ' + '.frac2(poly_cls(quoz($r, der($d), false))[0]).' * ln|';
          } else {
            echo frac2(poly_cls(quoz($r, der($d), false))[0]).' * ln|';
          }
        } else {
          echo ' + ln|';
        }
        echo_pol(poly_cls($d));
        echo '| + c</b>
        </center>';
      }
    }
  //grado_d > grado_n
    else {
      echo 'Il grado di N(x) &egrave; minore a quello di D(x).<br><br>';
      //IL NUMERATORE È LA DERIVATA DEL DENOMINATORE
      $n = poly_cls($n);
      $d = poly_cls($d);
      print_r(der($d));
      print_r($n);
      if (count(poly_cls(quoz(der($d), $n, false))) <= 1 && empty(poly_cls(resto(der($d), $n)))) {
        echo 'Il numeratore è la derivata del denominatore:<center>D[';
        echo_pol($d);
        echo '] = ';
        echo_pol(der($d));
        if (poly_cls(quoz(der($d), $n, false))[0] != 1) {
          echo ' = '.frac2(poly_cls(quoz(der($d), $n, false))[0]).' * (';
          echo_pol($n);
          echo ')';
        }
        echo '</center>Quindi:<center>&#8747; <div class="frac"><span>';
        echo_pol($n);
        echo '</span><span class="symbol">/</span><span class="bottom">';
        echo_pol($d);
        echo '</span></div> dx';
        if (poly_cls(quoz(der($d), $n, false))[0] != 1) {
          echo ' = '.frac2(poly_cls(quoz($n, der($d), false))[0]).' * &#8747; <div class="frac"><span>';
          echo_pol(der($d));
          echo '</span><span class="symbol">/</span><span class="bottom">';
          echo_pol($d);
          echo '</span></div> dx';
          echo ' = <b>'.frac2(poly_cls(quoz($n, der($d), false))[0]).' * ln|';
        } else {
          echo ' = <b>ln|';
        }
        echo_pol($d);
        echo '| + c</b>';
      }
      //IL DENOMINATORE È DI PRIMO GRADO
    }
  } else {
    echo '       <div id="phTitle"><b>OUTPUT</b></div>
      Inserire i dati richiesti nella sezione input!';
  }
      echo '
      </div>
    </div>
  </body>
</html>
';
?>
