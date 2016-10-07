<div class="row">
	<center><h4>Inventory.</h4></center><br>
	{supplies}
	<div class="span3x">
		<p>{code}<p></br>
		<form>
			<input type="text" name="receiving_unit">
			<input type="submit">
		</form>		
	</div>
	{/supplies}
</div>

<?php receipt(); ?><br/>
<?php totalCost(); ?><br/>
