<?php ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('./structure/header.php');
?>

<style>
  table,th,td {
    border : 1px solid black;
    border-collapse: collapse;
  }
  th,td {
    padding: 5px;
  }
  </style>
  <body>
  
  <h1>Votame andmebaasist klientide nimed!</h1>
  
  <form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
  <option value="">Vali klient:</option>
  <option value="Ramesh">Ramesh</option>
  <option value="Khilan ">Khilan</option>
  <option value="kaushik">kaushik</option>
  <option value="Chaitali">Chaitali</option>
  <option value="Hardik">Hardik</option>
  <option value="Komal">Komal</option>
  </select>
  </form>
  <br>
  <div id="txtHint">Klinetide nimekiri</div>
  
  <script>
  function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
}
  </script>
</body>