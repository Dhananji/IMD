<!DOCTYPE html>
<html>
<head>
	<title> Invoicing Module Development </title>
</head>
<body>
<h3> Invoicing Module Development </h3>
	<form method="post" action="{{ URL::to('store') }}">

		{{ csrf_field() }}
		<tr>
 	 	<td> Date: </td> <td> <input type="date" name="date"> </td> 
 	 	</tr>
 	 	<tr>
 		<td> Customer Name: </td> <td> <input type="text" name="name"> </td> 	
 		<br>
 	   </tr>
 	   <tr>
 	 	<br>
 	 	<td> Description: <br> </td>
 	 	<td><textarea rows = "5" cols = "60" name = "description"> </textarea></td>
 	 	</tr>
 		<br>
 	 	<br>
 	 	<tr>
 	 	<td>
 	 	Amount: </td> <td> <input type="text" name="amount"> </td>
 	 	</tr>
 	 	<br>
 	 	<br>
 	 	<tr>
 	 	<td>
 	 	Handling Fee: </td> <input type="text" name="fee"></td>
      </tr>
 	 	<br>
 	 	<br>
 	 	<!--<tr>
 	 		<td>Payment: </td>
 	 		<select name="payment_id">
 	 			<option value="cash">Cash</option>
 		  		<option value="cheque">Cheque</option>
  		  		<option value="credit">Credit</option>
 	 		</select>
 	 	</tr>-->
 	 	<br>
 	 	<br>
		Total:
 	 	<br>
 	 	<br>
	 <input type="Submit" value="submit">
	</form>

</body>
</html>