<div class="row">
    <center><h4>Welcome to our catalog!</h4></center><br>
    <form action="">
        {stock}
        <div class="span3x">
            <p>{code} - {price}</p><br/>
            <p>{description}</p><br/>
            <p>{quantity} left in stock</p><br/>
            <table align="center">
                <tr align="center">
                    <td>Add to cart</td>
                    <td><input type="checkbox" name="cart" value="{code}"></td>
                </tr>
                <tr align="center">
                    <td><p>Quantity</p></td>
                    <td><input type="text" name="quantity" value="1" style="width:20px"></td>
                </tr>
            </table>
            
            
        </div>

        {/stock}
    </form>
</div>