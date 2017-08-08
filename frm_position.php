<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Position</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtpositionid">Position ID:</label>  
  <div class="col-md-4">
  <input id="txtpositionid" name="txtpositionid" type="text" placeholder="enter position id" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cbdepartment">Select Department:</label>
  <div class="col-md-5">
    <select id="cbdepartment" name="cbdepartment" class="form-control">
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cbbanding">Select Banding:</label>
  <div class="col-md-4">
    <select id="cbbanding" name="cbbanding" class="form-control">
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtpositionname">Postion:</label>  
  <div class="col-md-4">
  <input id="txtpositionname" name="txtpositionname" type="text" placeholder="enter position" class="form-control input-md" required="">
    
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
