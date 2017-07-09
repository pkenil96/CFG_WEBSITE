<h5><div id="add_child_msg"></div></h5>
<h3>
<label>Enter name</label>
<input type="text" placeholder="Enter Name" id ='add_child_name' name="name"><br><br>
<label>Enter Age</label><input type="text" id="age_child" placeholder="Enter Age" name="age"><br><br>
<label>Choose Gender</label>
	<select name="gender" id="gender">
		<option value="Boy">Boy</option>
		<option value="Girl">Girl</option>
	</select><br><br>
<label>Choose School-type</label>
	<select id="school_type">
		<option value="Home-school">Home-school</option>
		<option value="Private">Private</option>
	</select><br><br>
<label>Enter School-name</label><input type="text" placeholder="School name" id="school_name"><br><br>
<label>Choose Standard</label><input type="text" placeholder="Standard" id="standard"><br><br>
<label>Enter grades</label><input type="text" placeholder="Grade" id="grade">
</h3><br>
<button type="button" class="btn btn-success" onclick="add_child()">Add child</button>&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-primary" onclick="reset()">Reset</button>
