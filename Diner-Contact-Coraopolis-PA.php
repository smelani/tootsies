<!-- top.php -->
<?php include("includes/top.php");?>

    <!--Begin Middle-->
    <div id="middle">
        
        <h2>Contact Tootsie's</h2>
        
        <p>Thank you for your interest! We appreciate your business. Contact us by phone, email, or the form today!</p>

        <!--Begin Main-->
        <main class="contact">
            
            <h3><i class="fa fa-clock-o"></i>Hours:</h3>
            <h4>Tuesday - Saturday, 7 a.m. - 2 p.m.</h4>
            <h4>Sunday, 8 a.m. - 2 p.m.</h4>

            <h3><i class="fa fa-phone"></i>Phone:</h3>
            <h4>(412) 264-1400</h4>

            <h3><i class="fa fa-envelope-o"></i>Email:</h3>
            <h4>tootsiesdiner@gmail.com</h4>

        </main>
        <!--End Main-->
        
        <!--Begin Aside-->
        <aside class="contact">
            
            <fieldset>
                
                <legend class="heading">Contact Form</legend>
                
                <form action="formhandler.php" method="post">
                
                    <label>Name:</label>
                    <input type="text" name="name" id="name" required>
                        
                    <label>Email:</label>
                    <input type="email" name="email" id="email" required>        
                
                    <label>Phone Number:</label>
                    <input type="text" name="phone-number" id="phone-number">
                    
                    <label>Subject:</label>
                    <input type="text" name="subject" id="subject">
                    
                    <label>Comments:</label>
                    <textarea name="comments" rows="8" required></textarea>
                    
                    <input class="submit" type="submit" value="SUBMIT">
                
                </form>
            
            </fieldset>
            
        </aside>
        <!--End Aside-->
        
    </div>
    <!-- End Middle-->
    
<!-- bottom.php -->   
<?php include("includes/bottom.php");?> 