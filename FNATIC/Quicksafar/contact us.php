<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=num], select, textarea {
  width: 50%;
  padding: 15px;
  border: 2px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
  margin-top: 4px;
  margin-bottom: 12px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 7px;
  background-color:    #e6faff;
  padding: 25px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <br>

    <label for="lname">Last Name</label>
    <br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <br>

    <label for="email">Email</label>
    <br>
    <input type="text" id="email" name="email" placeholder="Your email..">
    <br>

    <label for="num">Phone Number</label>
    <br>
    <input type="num" id="num" name="num" placeholder="Your Number..">
    <br>

    <label for="subject">Subject</label>
    <br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <br>

    <input type="submit" value="Submit">
  

  <ul>
           <h3>Contact info</h3>
            <li>
                <label for="num"><h5>Phone Number :</h5><a>61-1234-567-90</a></label>
                <a>61-1234-567-92</a>
            </li>
            <li>
                <label for="email"><h5>email :</h5> <a>Fnatic@1234.com</a></label>
                <a>Fnatic@4321.com</a>
            </li>
          </ul>
</div></form>
          

</body>
</html>
