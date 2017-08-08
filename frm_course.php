<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Course</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcoursetypeid">Course Type ID:</label>  
  <div class="col-md-5">
  <input id="txtcoursetypeid" name="txtcoursetypeid" type="text" placeholder="enter course type id" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcoursename">Course Name:</label>  
  <div class="col-md-4">
  <input id="txtcoursename" name="txtcoursename" type="text" placeholder="enter course name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtwhen">WHEN:</label>  
  <div class="col-md-4">
  <input id="txtwhen" name="txtwhen" type="text" placeholder="enter time to train" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btsave"></label>
  <div class="col-md-8">
    <button id="btsave" name="btsave" class="btn btn-success">Add</button>
    <button id="btclear" name="btclear" class="btn btn-danger">Clear</button>
  </div>
</div>

</fieldset>
</form>
