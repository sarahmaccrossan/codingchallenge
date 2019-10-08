<script>
function sendPin() {
  var x = document.getElementById("pin");
  var text = "";
  var i;
  for (i = 0; i < x.length ;i++) {
    text += x.elements[i].value;
  }
  
  document.getElementById("demo").innerHTML = text;
  
  
  
  // Create a request variable and assign a new XMLHttpRequest object to it.
var request = new XMLHttpRequest()

// Open a new connection, using the GET request on the URL endpoint
request.open('POST', 'https://frontend-challenge.screencloud-michael.now.sh/api/pin/', true)

request.onload = function() {
  // Begin accessing JSON data here
}

// Send request
request.send()
}
</script>
