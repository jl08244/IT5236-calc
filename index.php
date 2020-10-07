<!DOCTYPE html>
<html>

    <head>
	<title>Scientific Calculator</title>
		<meta charset="UTF-8">
		<meta name="author" content="Jacob Long">
		<link rel="stylesheet" href="design.css">
	        <link rel="stylesheet" href="css/normalize.css">
                <link rel="stylesheet" href="css/skeleton.css">
    </head>

    <body>

	<h1>Scientific Calculator</h1>

        <div id='calc'>
  
          <form name="calculator">
            
            <input type="text" name="answer" disabled="disabled" />
            <br>
            
            <input type="button" value=" c " onclick="calculator.answer.value = ''" />
            <input type="button" value=" ^ " onclick="calculator.answer.value += 'power'" />
            <input type="button" name="delete"  value=" del " onclick="calculator.answer.value = document.calculator.answer.value.substring(0,document.calculator.answer.value.length*1 -1)" />
            <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
            <br>
            
            <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
            <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
            <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
            <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
            <br>
          
            <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
            <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
            <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
            <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
            <br>
        
            <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
            <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
            <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
            <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
	    <br>

	    <input type="button" name="zero"  value=" 0 " onclick="calculator.answer.value += '0'"/>
	    <input type="button" value=" . " onclick="calculator.answer.value += '.'"/>
	    <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
  
    
          </form>
          <div id="brand">
            <p>brlong.me
          </div>
	</div>
	<footer>Jacob Long | IT5236 Calculator | &copy Copyright 2020 </footer>
    </body>
</html>
