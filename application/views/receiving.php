<div class="row">
	<center><h4>Inventory.</h4></center><br>
	{supplies}
	<div class="span3x">
		<p><a href="/supply/{code}">{name}<p><a></br>
		<p>{description}<p></br>
		<form action="/Receiving/receipt">
			<label>Order </label>
			<input type="text" name="receiving_unit">
			<input type="submit" name="submit">
		</form>		
	</div>
	{/supplies}
</div>
