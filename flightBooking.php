<?php
if (isset($_GET['flightID'])) {
    $flightID = $_GET['flightID'];
} else {//exception handle kore dibo
}

require_once("../Model/flightManagementModel.php");
require_once("../Model/routeManagementModel.php");

$flightDetails = searchFlight($flightID);

$routeDetails = searchRoute($flightDetails['routeID']);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the selected seat type
    if (isset($_POST['seatType']) && !empty($_POST['customerID'])){
        $seatType = $_POST['seatType'];
        $customerID = $_POST['customerID'];
    } else 
    {
        $currentUrl = $_SERVER['REQUEST_URI'];
        $msg = "Please select seat type";
        header("Location: $currentUrl&msg=$msg");
        exit();
    }

    header("Location: payment.php?flightID=$flightID&seatType=" . urlencode($seatType). "&customerID=" . urlencode($customerID));
    exit();
}
?>
<!-- Display flight and route details -->
<fieldset align="center">
    <a href="startingPage.php">
        <img src="images/Logo.png" width="150" height="150"><br>
    </a>
    <table width="80%" align="center" border=0>
        <tr>
            <td align="center" colspan="3">
                <?php echo $routeDetails['boardingPoint'] . ' To ' . $routeDetails['destinationPoint'] ?><br><br>
            </td>
        </tr>
        <tr>
            <td align="right" width=33%><?php echo "Departure: " . $routeDetails['dSchedule'] ?><br><br>
            </td>
            <td align="center" width=33%></td>
            <td align="left" width=33%>
                <?php echo "Time: " . $routeDetails['rDSchedule'] ?><br><br>
            </td>
        </tr>
        <tr>
            <td align="center" width=33%>
                <?php echo $routeDetails['boardingAirport'] ?><br><br>
            </td>
            <td align="center" width=33%><?php echo $flightDetails['fleet'] ?><br><br></td>
            <td align="center" width=33%>
                <?php echo $routeDetails['destinationAirport'] ?><br><br>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3">
                <form method="post">
                    <select name="seatType">
                        <option disabled selected>Seat Type</option>
                        <option value="Economy Class">Economy Class</option>
                        <option value="Business Class">Business Class</option>
                    </select><br><br>
                    <input type="text" class="customerID" id="customerID" name="customerID"
                        placeholder="Enter your customer ID" size=20>
                    <br><br><br><br><br><br>

                    <input type="submit" value="Proceed to Payment">
                </form>
            </td>
        </tr>
    </table>
</fieldset>