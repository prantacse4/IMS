<!DOCTYPE html>
<html>
<body>

Select your favorite fruit:
<select id="mySelect" onchange="myFunction()">
  <option value="apple">Apple</option>
  <option value="orange">Orange</option>
  <option value="pineapple">Pineapple</option>
  <option value="banana">Banana</option>
</select>

<p>Click the button to return the value of the selected fruit.</p>

<button type="button" onclick="myFunction()">Try it</button>

<script>
function myFunction() {
	alert(2);
  var x = document.getElementById("mySelect").selectedIndex;
  alert(document.getElementsByTagName("option")[x].value);
}
</script>

</body>
</html>