<html>

<head>
	<style>

		body{
			background-color: #D8D8D8;
			background-size: 100%;
			background-origin: content;
		}
		
		#header{
			background-color: #666699;
			font-style: italic;
			color: black;
			text-align:left;
			padding-bottom: 1px;
			padding-top: 1px;
			padding-left: 20px;
		}
		
		table, th, td {
			border: 1px solid black;
			margin-top: 25px;
		}

	</style>

</head>

<body>

	<div id = "header">
		<h1> Welcome <?php echo $_GET['id']?> </h1>
	</div>
	
	<table>

		<tr>
			<td colspan = "2" align = "center">
				<strong> Student List </strong>
			</td>
			<td> </td>
			<td colspan = "3" align = "center">
				<strong> Selected Student List </strong>
			</td>
		</tr>
		
		<tr>
			<td width = "90" align = "center">
				<font color = "#660099">
				<strong> Reg NO </strong></font>
			</td>
			<td align = "center">
				<font color = "#660099">
				<strong> Student Name </strong></font>
			</td>
			<td width = "220" align = "center">
				<font color = "#660099">
				<strong> Select Options </strong></font>
			</td>
			<td width = "90" align = "center">
				<font color = "#660099">
				<strong> Reg NO </strong></font>
			</td>
			<td width = "400" align = "center">
				<font color = "#660099">
				<strong> Student Name </strong></font>
			</td>	
		</tr>
		<tr>
			<td id = "cuadroTexto">
				<select name = "Reg[]" id = "RegNo" multiple = "" size = "15"
				style = "width: 90; background-color: #FFFFFF">
					<option value = "E/12/001"> E/12/001 </option> <option value = "E/12/013"> E/12/013 </option>
					<option value = "E/12/002"> E/12/002 </option> <option value = "E/12/014"> E/12/014 </option>
					<option value = "E/12/003"> E/12/003 </option> <option value = "E/12/015"> E/12/015 </option>
					<option value = "E/12/004"> E/12/004 </option> <option value = "E/12/016"> E/12/016 </option>
					<option value = "E/12/005"> E/12/005 </option> <option value = "E/12/017"> E/12/017 </option>
					<option value = "E/12/006"> E/12/006 </option> <option value = "E/12/018"> E/12/018 </option>
					<option value = "E/12/007"> E/12/007 </option> <option value = "E/12/019"> E/12/019 </option>
					<option value = "E/12/008"> E/12/008 </option> <option value = "E/12/020"> E/12/020 </option>
					<option value = "E/12/009"> E/12/009 </option> <option value = "E/12/021"> E/12/021 </option>
					<option value = "E/12/010"> E/12/010 </option> <option value = "E/12/022"> E/12/022 </option>
					<option value = "E/12/011"> E/12/011 </option> <option value = "E/12/023"> E/12/023 </option>
					<option value = "E/12/012"> E/12/012 </option> <option value = "E/12/024"> E/12/024 </option>
				</select>
			</td>
			<td width = "400" >
				<select name = "RegName" size = "15" id = "RegName"
				style = "width:400; background-color:#FFFFFF; " disabled = "disabled">
					<option value = "Weerathunga"> Weerathunga </option> <option value = "Perera"> Perera </option>
					<option value = "Samarasekara"> Samarasekara </option> <option value = "Rajapaksha"> Rajapaksha </option>
					<option value = "Siriwardana"> Siriwardana </option> <option value = "Weerawardana"> Weerawardana </option>
					<option value = "Mohotti"> Mohotti </option> <option value = "Udurawana"> Udurawana </option>
					<option value = "Kuruppuarachchi"> Kuruppuarachchi </option> <option value = "Udugama"> Udugama </option>
					<option value = "Munaweera"> Munaweera </option> <option value = "Wijenayake"> Wijenayake </option>
					<option value = "Gamage"> Gamage </option> <option value = "Wijegunawardana"> Wijegunawardana </option>
					<option value = "Weerabaddana"> Weerabaddana </option> <option value = "Weerathunga"> Weerathunga </option>
					<option value = "Kulathunga"> Kulathunga </option> <option value = "Weerathunga"> Weerathunga </option>
					<option value = "Samarasinghe"> Samarasinghe </option> <option value = "Weerathunga"> Weerathunga </option>
					<option value = "Paranavithana"> Paranavithana </option> <option value = "Weerathunga"> Weerathunga </option>
					<option value = "Gunawardana"> Gunawardana </option> <option value = "Weerathunga"> Weerathunga </option>
				</select>
			</td>
			
			<td width = "220" align = "center">
				<input name = "add1" type = "button" value = "Add==>>" onclick = "addname()" id = "addbutton">
				<input type = "button" value = "<<==Drop" onclick = "removename()" id = "dropbutton">
				<br></br>
				<input type = "submit" value = "  Save  " id = "combobox">
	
			</td>
			<td>
				<select name = "name1" id = "name1" size = "15"
				style = "width:90; background-color:#FFFFFF" multiple = "true">
					
				</select>
			</td>
			<td>
				<select name = "name2" size = "15" id = "name2"
				style = "width:425; background-color:#FFFFFF" disabled = "disabled">
				
				</select>
			</td>
		</tr>
		</form>
	</table>
</body>
<script>
	var first=document.getElementById("RegNo");
	var firstNames=document.getElementById("RegName");
	var second=document.getElementById("name1");
	var secondNames=document.getElementById("name2");
	var addbutton=document.getElementById("addbutton");
	var dropbutton=document.getElementById("dropbutton");
	var val,val2;
	
	first.onclick=function (e){
		val = e.target.value;
		val2 = firstNames[first.selectedIndex].value;						  						
	}
	
	second.onclick = function (e){
		val = e.target.value;
		val2 = secondNames[second.selectedIndex].value;						  						
	}
	
	addbutton.onclick = function(e){
		if((val!=null) && (val2!=null)){
			addOption(val, second, val2, secondNames);
			val=null;
			val2 = null;
			var index=first.selectedIndex;
			first.removeChild(first[index]);
			firstNames.removeChild(firstNames[index]);
		}
	}
	
	dropbutton.onclick = function(e){
		if((val!=null) && (val2!=null)){
			addOption(val, first, val2, firstNames);
			val=null;
			val2 = null;
			var index=second.selectedIndex;
			second.removeChild(second[index]);
			secondNames.removeChild(secondNames[index]);
		}
	}
	
	function addOption(val, select, val2, select2) {
		var option = document.createElement('option');
		option.value = val;
		option.innerHTML = val;
		select.appendChild(option);
	  
		var option2 = document.createElement('option');
		option2.value = val2;
		option2.innerHTML = val2;
		select2.appendChild(option2);
	}
	
	var select = document.getElementById('combobox');
	select.onclick = function() {
    // Get the selected value
    var value = this.options[this.selectedIndex].value;
    // Process change event
};
	
</script>

</html>