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
       width: 643px;
       height: 750px;
       padding: 40px;  
       border: 40px solid lightgrey;
       text-align: center;
    }
      div.c{
          text-align: left;
      }
    input[type=text], select {
  width: 50%;
  padding: 5px 20px;
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
    <div class="a">Reports</div>
        <div class="b">
            <div class="c">Incident Report</div>
        <br>
<form>
    <label for="Org">Date of Occurence</label>
    <input type="text" id="Occur" name="date/occur" placeholder="....">
    <br>
    <label for="Vent">Time of Occurence</label>
    <input type="text" id="" time/occur="Evnt" placeholder="... ">
    <br>
    <h4>Causet of Incident</h4>
    <label for="Ven">Name</label>
    <input type="text" id="n" name="nm" placeholder=".....">
    <br>
    <label for="Dat">ID no.</label>
    <input type="text" id="no" name="idno" placeholder="...... ">
    <br>
    <label for="Tim">Course</label>
    <input type="text" id="cr" name="course" placeholder=".....">
    <br>
    <h4>Description</h4>
    <textarea rows="4" cols="50" name="comment">
</textarea>
    <h4>Extent of Damage</h4>
    <textarea rows="4" cols="50" name="comment">
</textarea>
    <h4>Action Taken</h4>
    <textarea rows="4" cols="50" name="comment">
</textarea>
    <br>
    <br>
 
    <button class="button">Acknowledge</button>
        
</form>

      </div>  
    </body>
</html>