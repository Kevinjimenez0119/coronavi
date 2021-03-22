
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Curriculum</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main2.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script src="main.js"></script>
  </head>

  <body>
    <header>

<div class="cab">
  <h1 class="titulo">Reporte de Sintomas</h1>
</div>



    </header>
    <div class="wrap">
  		<ul class="tabs">
        <li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">Sintomas</span></a></li>
        <li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">resumen</span></a></li>
        <li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Conclusion</span></a></li>
  		</ul>

  		<div class="secciones">
  			<article id="tab1">
          <h5 class="subtitulo">Selecciona los sintomas que presentas</h5>
          <input type="checkbox" id="sintoma1" name="sinto" value="Fiebre">
          <label for="sintoma1"> Fiebre</label><br>
          <input type="checkbox" id="sintoma2" name="sinto" value="Dolor de garganta">
          <label for="sintoma2"> Dolor de garganta</label><br>
          <input type="checkbox" id="sintoma3" name="sinto" value="Congestion nasal">
          <label for="sintoma3"> Congestion nasal</label><br>
          <input type="checkbox" id="sintoma4" name="sinto" value="Tos">
          <label for="sintoma4"> Tos</label><br>
          <input type="checkbox" id="sintoma5" name="sinto" value="Dificultad al respirar">
          <label for="sintoma5"> Dificultad al respirar</label><br>
          <input type="checkbox" id="sintoma6" name="sinto" value="Fatiga">
          <label for="sintoma6"> Fatiga</label><br>
          <input type="checkbox" id="sintoma7" name="sinto" value="Escalofrio">
          <label for="sintoma7"> Escalofrio</label><br>
          <input type="checkbox" id="sintoma8" name="sinto" value="Dolor de musculos">
          <label for="sintoma8"> Dolor de musculos</label><br>
          <input type="checkbox" id="sintoma9" name="sinto" value="Ninguna de las anteriores">
          <label for="sintoma9"> Ninguna de las anteriores</label><br>
          <br>
          <br>





        <br>


          <h5 class="subtitulo">Elige las opciones que apliquen en tu caso</h5>
          <input type="checkbox" id="caso1" name="cas" value="Estuve en contacto que tuvo alguno de esos sintomas">
          <label for="caso1"> Estuve en contacto que tuvo alguno de esos sintomas</label><br>
          <input type="checkbox" id="caso2" name="cas" value="Hice un viaje internacional en los ultimos 30 dias">
          <label for="caso2"> Hice un viaje internacional en los ultimos 30 dias</label><br>
          <input type="checkbox" id="caso3" name="cas" value="hice un viaje nacional los ultimos 30 dias">
          <label for="caso3"> hice un viaje nacional los ultimos 30 dias</label><br>
          <input type="checkbox" id="caso4" name="cas" value="Soy trabajador de salud">
          <label for="caso4"> Soy trabajador de salud</label><br>
          <input type="checkbox" id="caso5" name="cas" value="Ninguna de las anteriores">
          <label for="caso5"> Ninguna de las anteriores</label><br>
          <br>
          <br>




        <br>
  			</article>
  			<article id="tab2">
          <button id="con" >Continuar</button>

         <table id="tablax" class="table table-striped table-bordered" style="width:100%">
         <thead>
          <th>Sintoma</th>


         </thead>
         <tbody id="res">

         </tbody>

        </table>
        <table id="tabla2" class="table table-striped table-bordered" style="width:100%">
        <thead>
         <th>Casos</th>


        </thead>
        <tbody id="res2">

        </tbody>

       </table>
  			</article>
        <article id="tab3">
          <button id="con2" >Continuar</button>
        </table>
        <table id="tabla3" class="table table-striped table-bordered" style="width:100%">
        <thead>
         <th>Nombre</th>
         <th>Parentesco</th>
         <th>Sintomas</th>
         <th>Casos</th>
         <th>Resultado</th>


        </thead>
        <tbody id="res3">
          <tr>
              <td><?php echo $nombre ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>


          </tr>
        </tbody>

        </article>

  		</div>
  	</div>

  </body>
  <script type="text/javascript">



  	con.onclick = function(){
      sintoma1 = document.getElementById("sintoma1");
      sintoma2 = document.getElementById("sintoma2");
      sintoma3 = document.getElementById("sintoma3");
      sintoma4 = document.getElementById("sintoma4");
      sintoma5 = document.getElementById("sintoma5");
      sintoma6 = document.getElementById("sintoma6");
      sintoma7 = document.getElementById("sintoma7");
      sintoma8 = document.getElementById("sintoma8");
      sintoma9 = document.getElementById("sintoma9");
      var todo_correcto = true;
res2.innerHTML = "";
res.innerHTML = "";
  if(document.getElementById('sintoma1').checked){
      todo_correcto = true;

      res.innerHTML +=`
			<tr>
					<td>${sintoma1.value}</td>


			</tr>`
  }if(document.getElementById('sintoma2').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma2.value}</td>


			</tr>`
  }if(document.getElementById('sintoma3').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma3.value}</td>


			</tr>`
  }if(document.getElementById('sintoma4').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma4.value}</td>


			</tr>`
  }if(document.getElementById('sintoma5').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma5.value}</td>


			</tr>`
  }if(document.getElementById('sintoma6').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma6.value}</td>

			</tr>`
  }if(document.getElementById('sintoma7').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma7.value}</td>


			</tr>`
  }if(document.getElementById('sintoma8').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma8.value}</td>


			</tr>`
  }if(document.getElementById('sintoma9').checked){
      todo_correcto = true;
      res.innerHTML +=`
			<tr>
					<td>${sintoma9.value}</td>


			</tr>`
  }if(document.getElementById('caso1').checked){
      todo_correcto = true;
      res2.innerHTML +=`
			<tr>
					<td>${caso1.value}</td>


			</tr>`
  }if(document.getElementById('caso2').checked){
      todo_correcto = true;
      res2.innerHTML +=`
			<tr>
					<td>${caso2.value}</td>


			</tr>`
  }if(document.getElementById('caso3').checked){
      todo_correcto = true;
      res2.innerHTML +=`
			<tr>
					<td>${caso3.value}</td>


			</tr>`
  }if(document.getElementById('caso4').checked){
      todo_correcto = true;
      res2.innerHTML +=`
			<tr>
					<td>${caso4.value}</td>


			</tr>`
  }if(document.getElementById('caso5').checked){
      todo_correcto = true;
      res2.innerHTML +=`
			<tr>
					<td>${caso5.value}</td>


			</tr>`
  }

  return todo_correcto;
  };
  con2.onclick = function(){
res3.innerHTML ="";

    if(document.getElementById('sintoma1').checked && document.getElementById('sintoma2').checked && document.getElementById('sintoma3').checked && document.getElementById('sintoma4').checked && document.getElementById('sintoma5').checked && document.getElementById('sintoma6').checked && document.getElementById('sintoma7').checked
  && document.getElementById('sintoma8').checked && document.getElementById('caso1').checked && document.getElementById('caso2').checked && document.getElementById('caso3').checked && document.getElementById('caso4').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Positivo para coronavirus</td>


			</tr>`
    }else if(document.getElementById('sintoma1').checked && document.getElementById('sintoma2').checked && document.getElementById('sintoma3').checked && document.getElementById('sintoma4').checked && document.getElementById('sintoma5').checked && document.getElementById('sintoma6').checked && document.getElementById('sintoma7').checked
  && document.getElementById('sintoma8').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Positivo para coronavirus</td>


			</tr>`
    }else if(document.getElementById('sintoma1').checked && document.getElementById('sintoma2').checked && document.getElementById('sintoma4').checked && document.getElementById('sintoma5').checked && document.getElementById('sintoma7').checked
  && document.getElementById('sintoma8').checked && document.getElementById('caso1').checked && document.getElementById('caso2').checked && document.getElementById('caso3').checked && document.getElementById('caso4').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Positivo para coronavirus</td>


			</tr>`
    }else if(document.getElementById('sintoma1').checked && document.getElementById('sintoma2').checked && document.getElementById('sintoma4').checked && document.getElementById('sintoma5').checked && document.getElementById('sintoma7').checked
  && document.getElementById('sintoma8').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Positivo para coronavirus</td>


			</tr>`
    }else if(document.getElementById('sintoma9').checked || document.getElementById('caso5').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Negativo para corona virus</td>


			</tr>`
    }else if(document.getElementById('sintoma1').checked && document.getElementById('sintoma2').checked  && document.getElementById('sintoma5').checked && document.getElementById('caso1').checked && document.getElementById('caso2').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Positivo para coronavirus</td>


			</tr>`
    }else if(document.getElementById('sintoma1').checked && document.getElementById('caso1').checked && document.getElementById('caso2').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Probaiblidad de tener coronavirus</td>


			</tr>`
    }else {
      res3.innerHTML +=`
			<tr>
          <td>${""}</td>
          <td>${""}</td>
          <td>${""}</td>
					<td>${""}</td>
          <td>Negativo para coronavirus</td>


			</tr>`


    }
    if(document.getElementById('sintoma1').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma1.value}</td>
					<td></td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma2').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma2.value}</td>
					<td></td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma3').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma3.value}</td>
					<td></td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma4').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma4.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma5').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma5.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma6').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma6.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma7').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma7.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma8').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma8.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('sintoma9').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${sintoma9.value}</td>
					<td>${""}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('caso1').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${""}</td>
					<td>${caso1.value}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('caso2').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${""}</td>
					<td>${caso2.value}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('caso3').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${""}</td>
					<td>${caso3.value}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('caso4').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${""}</td>
					<td>${caso4.value}</td>
          <td></td>


			</tr>`
    }if(document.getElementById('caso5').checked){
      todo_correcto = true;
      res3.innerHTML +=`
			<tr>
          <td></td>
          <td></td>
          <td>${""}</td>
					<td>${caso5.value}</td>
          <td></td>


			</tr>`
    }
  };
  </script>
</html>
