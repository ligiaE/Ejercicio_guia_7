<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>desarrollo del ejercicio 7</title>

                        <p>el ejercicio 7 se trata de Solicitar al usuario el total de kilómetros que recorre su automóvil si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, redondear el resultado para que no muestre decimales.    </p>
                        
                        <h2>Desarrollo</h2>     
                        <form id="enviars" name="enviars" method="post" action="desarrollo_7.php">
     <label>Ingrese canitadad de Kilometros: </label><input id='Km' name='Km' onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="6"  required="required">
     <br /><br />
            <button id="enviar" name="enviar" value="enviar">Enviar</button>
            <br /><br />
    </form>
       
      </body>
</html>