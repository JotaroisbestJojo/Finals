<!DOCTYPE html>
<html lang="en">
<head>
<title>Black and White Game</title>
</head>
<body>
<h1 align="center"Black and White Game by Vaughn Mamugay</h1>
<h2 align="center"Your guess:</h2>
<form>
<p align="center"> <select id = "myList">
<option value = "1">Black</option>
<option value = "1">White</option>
</select>
<script type="text/javascript">
var colors = ["black", "white"];
colors = colors.sort();
function do_game() {
var target_index = Math.floor(Math.random() * (colors.length - 0)) + 0;
var target = colors[target_index];
for (var i = 0 ; i < colors.length ; i++) {
message += colors[i];
if (i == (colors.length-2)){
message += " and ";
} else if (i != (colors.length-1)) {
message += ", ";
}
}
var guess_input;
alert(target);
function check_guess(guess, target) {
if (colors.indexOf(guess)<0) {
</p>
</form>
</script>
</body>
</html>
