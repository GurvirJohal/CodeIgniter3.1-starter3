<div class="row">
	<center><h4>Edit Inventory</h4></center><br>
        
        <center>
                <table border="1" cellpadding="5px">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                {supplies}
                    <tr align="center">
                    <td><a href="/administration/editsupply/{code}">{name}<a></td>
                        <td>{description}</td>
                    </tr>
                {/supplies}
                </table>
        </center>
        
        
</div>