<div id="register" class="container-fluid">
    <br />
    <input type="button" id="showhide" onclick="toggle_visibility('hidingdiv');" value="Create Account" class="shadow btn btn-hide">
    <div id="hidingdiv">
        <form name="userReg" method="post" action="inc/insertuser.php">
            <table class="center">
                <tr>
                    <td>Firt Name:</td>
                    <td>
                        <input type="text" name="firstName" placeholder="Name"> </td>
                </tr>
                <tr>
                    <td>Surname:</td>
                    <td>
                        <input type="text" name="surname" placeholder="Surname"> </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>
                        <input type="text" name="customerPhone" placeholder="Phone No"> </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>
                        <input type="text" name="address" placeholder="1 Main st."> </td>
                </tr>
                <tr>
                    <td> Postcode:</td>
                    <td>
                        <input type="text" name="postcode" placeholder="AA00 1BB"> </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="customerEmail" placeholder="user@mail.uk"> </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="customerPassword" placeholder="****"> </td>
                </tr>
            </table>
            <br />
            <input type="submit" name="add_user" value="Register" class="btn btn-sm btn-danger"> </form>
    </div>
    <br />
    <br /> </div>
<script type="text/javascript">
    $('#showhide').click(function (e) {
        e.preventDefault();
        $('#hidingdiv').toggle();
    });
</script>