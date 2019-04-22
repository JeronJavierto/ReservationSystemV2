<!DOCTYPE html>
<html>
<head>
  <style>
    
    div.a{
        background-color: #00008B;
        padding-top: 2px;
        width: 800px;
        padding-bottom: 2px;
        padding-left: 2px;
        color: floralwhite;
    }
    div.b{
       background-color: white;
       width: 662px;
       height: 525px;
       padding: 30px;  
       border: 40px solid lightgrey;
    }
    input[type=text], select {
  width: 100%;
  padding: 14px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=reserve] {
  width: 10%;
  background-color: Green;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=reserve]:hover {
  background-color: Green;
}

.button {
  background-color: #00008B;
  border: none;
  color: white;
  padding: 12px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  cursor: pointer;
} 
    
</style>      
</head>
    <body>
    <div class="a">Reservartion</div>
        <div class="b">Registration Form:
        <br>
<form action="../../php/reservation_form.php" method="POST">
    <label for="Org">Department/Organization:</label>
    <input type="text" id="Org" name="DepOrg" placeholder="Your department/organization...">
    <br>
    <label for="Vent">Event</label>
    <input type="text" id="Vent" name="Event" placeholder="Event.. ">
    <br>
    <label for="Ven">Venue</label>
    <input type="text" id="Ven" name="Venue" placeholder="Venue.. ">
    <br>
    <label for="Dat">Date</label>
    <input type="text" id="Dat" name="Date" placeholder="Date.. ">
    <br>
    <label for="Tim">Time Start</label>
    <input type="time" id="Tim" name="TimeStart" placeholder="Time start.. ">
    <br>
    <label for="Tim">Time End</label>
    <input type="time" id="Tim" name="TimeEnd" placeholder="Time end.. ">
    <br>
    <button class="button">Reserve</button>
    
</form>

      </div>  
    </body>
</html>