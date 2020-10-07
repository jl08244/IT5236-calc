<!DOCTYPE html>
<html>

    <head>
	<!--Title which will appear in the web browser tab -->
	<title>Scientific Calculator</title>
		<meta charset="UTF-8">
		<meta name="author" content="Jacob Long">
		<!--Links to the design style sheet which gives the webpage its look (css) -->
		<link rel="stylesheet" href="design.css">
	        <link rel="stylesheet" href="css/normalize.css">
                <link rel="stylesheet" href="css/skeleton.css">
    </head>

    <body>
	
	<!--Heading at the top of the web page -->
	<h1>Scientific Calculator</h1>
	
	<!--Div tag used for CSS and formatting of the page -->
	<div id='calc'>

	<!--Creates a form for the organization of the calculator. I choose a form because I could use HTML input tags to create buttons and, if needed, can use JavaScript and PHP code to help with math functions and other calculator functionality -->  
          <form name="calculator">

	<!--Textarea for the input and output of the calculator. Disabled typing to prevent the use of inserting random characters. -->
            <input type="text" name="answer" disabled="disabled" />
            <br>

	<!--Buttons for clear, exponents, backspace, and multiply. -->
            <input type="button" value=" c " onclick="calculator.answer.value = ''" />
            <input type="button" value=" ^ " onclick="calculator.answer.value += 'power'" />
            <input type="button" name="delete"  value=" del " onclick="calculator.answer.value = document.calculator.answer.value.substring(0,document.calculator.answer.value.length*1 -1)" />
            <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
            <br>

	<!--Buttons for 1, 2, 3, and divide. -->  
            <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
            <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
            <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
            <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
            <br>

	<!--Buttons for 4, 5, 6, and add. -->
            <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
            <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
            <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
            <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
            <br>

	<!--Buttons for 7, 8, 9, and subtract. -->
            <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
            <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
            <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
            <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
	    <br>

	<!--Buttons for 0, decimal, and equal. -->
	    <input type="button" name="zero"  value=" 0 " onclick="calculator.answer.value += '0'"/>
	    <input type="button" value=" . " onclick="calculator.answer.value += '.'"/>
	    <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
  
	<!--End of form and creates a div tag for a watermark -->
          </form>
          <div id="brand">
            <p>brlong.me
          </div>
	</div>
	<!--Footer with infomation  which appears at the bottom of the web page -->
	<footer>Jacob Long | IT5236 Calculator | &copy Copyright 2020 </footer>
    </body>
</html>
