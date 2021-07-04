<?php
require "payment_1_code.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}



.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}


.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>

<h2>Enter Mobile Banking detail here</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">
      
        <div class="row">


          <div class="col-50">
            <h3>Payment</h3>
            <label for="cname">Name of Bank:</label>
            <input type="text" id="cname" name="b_name" placeholder="Bank Name">
            <label for="ccnum">Account No:</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-00">
            <label for="expmonth">IFSC code:</label>
            <input type="text" id="expmonth" name="ifsc" placeholder="IFSC code">
            <div class="row">
              <div class="col-50">
                <label for="expyear">CRN:</label>
                <input type="text" id="expyear" name="crn" placeholder="12345678">
              </div>
              <div class="col-50">
                <label for="cvv">Security Pin:</label>
                <input type="text" id="cvv" name="pin" placeholder="123456">
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Pay now" class="btn" name="submit">
      </form>
    </div>
  </div>
</body>
</html>