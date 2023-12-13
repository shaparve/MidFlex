<?php include 'connection2.php'; 

if(@$_REQUEST['Register']=='Register')

{
    $Categories = $_REQUEST['Categories'];
    $sname = $_REQUEST['sname'];
    $Quantity = $_REQUEST['Quantity'];
    $Quality = $_REQUEST['Quality'];
    $pricerange = $_REQUEST['pricerange'];
    $village = $_REQUEST['village'];
    $town = $_REQUEST['town'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];                        
    $radio1 = $_REQUEST['radio1'];
    $radio2 = $_REQUEST['radio2'];
    $photo = $_REQUEST['photo'];

    $query = mysqli_query($cn,"INSERT INTO demandreg (Categories, sname, Quantity, Quality , pricerange, village, town, city, state, radio1, radio2, photo)
    VALUES ('$Categories', '$sname', '$Quantity', '$Quality', '$pricerange', '$village', '$town', '$city', '$state', '$radio1', '$radio2', 'photo')" );
}


?>
<html>
<head>
    
    <title>Demand Registration</title>

    <link href="registration.css" rel="stylesheet">

</head>
<body>

        <div class="container">
            <header> Demand Registration</header>

            <form action="demandregistration.php" method="post">
                    <div class="form first ">
                            <div class="details personal">
                                    <span class="title"></span>

                                    <div class="fields3">
                                        <div class="input-field2">
                                            
                                            <label for="Categories">Categories</label>
                                            <select>
                                                <option value="" selected>Choose one </option>
                                                <option value="1">Dairy products </option>
                                                <option value="2">Fruit products</option>
                                                <option value="3">Vegetables products</option>
                                                <option value="4">Textile products</option>
                                                <option value="5">Oil seeds products </option>
                                              </select>
                                        </div>
                                    
                                    
                                    <div class="fields">

                                            <div class="input-field">
                                    
                                                <label>Spacific Name</label>
                                                <input type="text" id="Spacificname" name="sname">
                                            </div>

                                            <div class="input-field">
                                    
                                                <label>Quantity</label>
                                                <input type="number" id="Quantity" name="Quality">

                                            </div>

                                            <div class="input-field">
                                                <label>Quality</label>
                                                <input type="text" id="Quality" name="Quality">
                                            </div>

                                            <div class="input-field">
                                                <label for="price range">price Range</label>
                                                <input type="number" id="pricerange" name="pricerange">
                                            </div>
                                        
                                           
                                        
                                            
                                            

                                    </div>

                                    <span class="title">Supply Location</span>

                                    <div class="fields1">

                                        <div class="input-field1">
                                            <label for="Village">Village</label>
                                            <input type="text" id="Village" name="Village">
                                        </div>
                                    
                                        <div class="input-field1">
                                            <label for="Town">Town</label>
                                            <input type="text" id="Town" name="Town">
                                        </div>
                                    
                                        <div class="input-field1">
                                            <label for="City">City</label>
                                            <input type="text" id="City" name="City">
                                        </div>
                                    
                                        <div class="input-field1">
                                            <label for="State">State</label>
                                            <input type="text" id="State" name="State">
                                        </div>
                                    
                                    
                                        

                                        
                                        </div>

                                        <div class="fields4">

                                           
                                            <div class="input-field3">
                                                <label for="Transport">Transport facility provided?</label>
                                                <input type="radio" id="yes1" name="1">Yes &nbsp; <input type="radio" id="no1" name="1">No
                                            </div>
                                        
                                            <div class="input-field3">
                                                <label for="Stoarge">Advance payment provided?</label>
                                                <input type="radio" id="yes2" name="2">Yes &nbsp; <input type="radio" id="no2" name="2">No
                                            </div>
                                        
                                            <div class="input-field3">
                                                <label for="Photo">Photo</label>
                                                <input type="file" id="photo" name="photo" multiple>  
                                                <input type="button" value="Upload" id="upload">
                                            </div>
                                        
                                           
                                            <input class="Register" type="submit" value="Register" name="Register">
                                            
                                        </div>

                                        

                            </div>
                    </div>
            </form>




        </div>
    
</body>
</html>