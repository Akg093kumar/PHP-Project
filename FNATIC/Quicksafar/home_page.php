<?php
include('header.php');
?>
<div id="content">
	<div id="contentWrapper">
		<h2>Online Car Rental Portal</h2>
		<div id="ecars" style="margin-top: 10px;margin-left: 15%;width: 100%;float: left;">
			





<form method="POST" action="connect.php">
				<table style="margin-left: 25%;" border="1">
                                       <tr>
						<td>Name<input type="text" name="name" id="name"></td>
					</tr>
					<tr>
						<td>JourneyDate <input type="date" name="jDate"></td>
					</tr>

 					<tr><td><label for="Time">JourneyTime:</label>
 						<input type="time" name="jtime"></input></td></tr>

					<tr>  <td><label for="Passenger">Passenger:</label>
 
					 <select id="Passenger" name="Passengers"  >
					  <option value="Choose">Choose</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  </select></td>

					<tr>
						<td>
				   		<table>
				   			<tr>
							   <td>Source <select name="pPoint">
							   				<option>Source</option>
							   				<option value="BBSR Railway Station">BBSR Railway Station</option>
											<option value="Biju Patnaik Airport">Biju Patnaik Airport</option>
											<option value="Baramunda Bus Stand">Baramunda Bus Stand</option>
							   			  </select>
							    </td>
							</tr>
							<tr>
								<td>Destination<select name="dPoint">
							   				<option>Destination</option>
							   				<option>Puri</option>
							   				<option>Konark</option>
							   				<option>Jagatsinghpur</option>
							   				<option>Kendrapada</option>
							   				<option>Jajpur</option>
							   			  </select>
							   	</td>
							</tr>
				   		</table>
				   		</td>
				   </tr>
					<tr>
					   <td align="center"><input type="submit" name="submitBtn" value="Book Your Journey"></td>
					</tr>
				</table>
			</form><br><br><br><br>
			<table>
				<tr>
					<td><img src="_pic/maruti01.jpg" height="145" width="249"  /></td>
					<td><img src="_pic/maruti02.jpg" height="145" width="249"  /></td>
					<td><img src="_pic/maruti03.jpg" height="145" width="249"  /></td>
				</tr>
				<tr>
					<td><img src="_pic/maruti04.jpg" height="145" width="249"  /></td>
					<td><img src="_pic/maruti05.jpg" height="145" width="249"  /></td>
					<td><img src="_pic/maruti06.jpg" height="145" width="249"  /></td>
				</tr>
			</table>
		</div>
	</div>
</div>		
<?php
include('right.php');
include('footer.php');
?>