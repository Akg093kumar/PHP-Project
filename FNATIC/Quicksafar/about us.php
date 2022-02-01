<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 35%;
  margin-bottom: 12px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 60px;
  text-align: center;
  background-color: #66ff66;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #ff99ff;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>We are India's Favourite One Way Taxi Service Provider.
     It has been founded on the belief: Return Fare, Not Fair!
     So now when you travel one-way, you pay for one-way.
     We are driven by one single value: Trust.
     Whenever customer makes a booking with us. They put a lot of trust on us.
     Cab / Taxi will arrive on Time,
     Cab / Taxi will be clean & Well-Maintained,
     Driver will be well-behaved & Professional in nature,
     Fares will be transparent in nature with no hidden charges.
     Fare will be recieved by us through offline method only via driver.
     Any-time 24x7 Support Team, whenever you need us.</p>
  </p>
</div>



</body>
</html>
