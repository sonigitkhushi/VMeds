<!DOCTYPE html>
<html>
    <head>
        <title>Stock of Medicine</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link CSS -->
        <link rel="stylesheet" href="style123.css">
    </head>
    <style>
        body{
            background-image: url("https://img.freepik.com/free-vector/clean-medical-background_53876-97927.jpg?size=626&ext=jpg");
	background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-position: center;
                  background-size: 100% 100%;
        }
    </style>
    <body>

        <div class="mainTable">
            <h1>Data</h1>
            <table id="table" border="1">
                
                <tr>
                    <th>Sno</th>
                    <th>Medicine Name</th>
                    <th>Stock</th>
                    <th>Expiry date</th>
                    
                </tr>
                
                <tr>
                    <td>01</td>
                    <td>Paracetamol </td>
                    <td>150</td>
                    <td>28-09-2023

                    </td>
                    
                </tr>
                
                <tr>
                    <td>02</td>
                    <td>Benadryl </td>
                    <td>30</td>
                    <td>30-04-2023</td>
                    
                </tr>
                
                <tr>
                    <td>03</td>
                    <td>Meftal-Spas </td>
                    <td>200</td>
                    <td>05-05-2023</td>
                   
                </tr>
                
                <tr>
                    <td>04</td>
                    <td>Cetirizine tablet</td>
                    <td>120</td>
                    <td>02-11-2023</td>
                    
                </tr>
                
                <tr>
                    <td>05</td>
                    <td>Boro-g</td>
                    <td>15</td>
                    <td>09-07-2023</td>
                   
                </tr>
                
                <tr>
                    <td>06</td>
                    <td>Becosules Capsule </td>
                    <td>60</td>
                    <td>09-08-2023</td>
                    
                </tr>
                
                <tr>
                    <td>07</td>
                    <td>Cipladine </td>
                    <td>30</td>
                    <td>03-04-2023</td>
                    
                </tr>
                
                <tr>
                    <td>08</td>
                    <td>Hansaplast </td>
                    <td>1</td>
                    <td>09-10-2023</td>
                    
                </tr>
                
                <tr>
                    <td>09</td>
                    <td>Moistane Eye drops</td>
                    <td>7</td>
                    <td>11-03-2024</td>
                    
                </tr>

                <tr>
                    <td>10</td>
                    <td>Ciplox eye-drops</td>
                    <td>10</td>
                    <td>18-09-2024</td>
                   
                </tr>
                
            </table>
        </div>


        <!-- Update Button -->
        <div class="updateBtn">
            <button  onclick="editTableDisplay()">Update data</button>
        </div>

        <!-- Edit table -->
        <div class="editTable">
            <div class="left">Medicine</div><div class="right"><input type="text" name="fname" id="fname"></div><br><br>
            <div class="left">Stock </div><div class="right"><input type="text" name="lname" id="lname"></div><br><br>
            <div class="left">Expiry date</div><div class="right"><input type="text" name="country" id="country"></div><br><br>
            
            <button onclick="editRow();" class="editRowBtn">Update</button><br><br>
        </div>        

        <!-- link JavaScript -->
        <script src="script.js"></script>
    </body>
</html>