<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Personal Information - PayDude™</title>
        <link rel="stylesheet" href="../css/form.css" type="text/css" />
	</head>
	<body>
        <header>
            <?php include '../includes/nav.php'; ?>
            <h1><em>Hammer</em>Corp™</h1>
        </header>
		<main>
            <h2>Production Information</h2>
                <form id="edit_payment_info" action="../process-form.php" method="get">
                    <input type="hidden" name="form_sent" value="1" />
                    <h3>Choose Your Hammer</h3>
                    
                <fieldset>
                    <div class="size_selection">
                        <h3>Size</h3>
                        <input type="radio" name="size" id="sm" value="sm" />
                        <label for="sm">Small $67.99 (6oz)</label>
                        
                        <input type="radio" name="size" id="med" value="med" />
                        <label for="med">Medium $89.99 (8oz)</label>
                        
                        <input type="radio" name="size" id="lrg" value="lrg" />
                        <label for="lrg">Large $110.50 (16oz)</label>
                    </div>

                    <div class="hammer_type">
                        <h3>Hammer Type</h3>
                        <input type="radio" name="hammer" id="ball" value="ball" />
                        <label for="ball">Ball Peen Hammer</label>
                        
                        
                        <input type="radio" name="hammer" id="hook" value="hook" />
                        <label for="claw">Claw Hammer</label>
                        
                        
                        <input type="radio" name="hammer" id="club" value="club" />
                        <label for="club">Club Hammer</label>
                        
                    </div>
                    
                    <div class = "color_selection">
                        <h3>Color</h3>
                        <input type="checkbox" name="color" id="red" value="red" />
                        <label for="red">Red</label>
                        
                        <input type="checkbox" name="color" id="blue" value="blu" />
                        <label for="blue">Blue</label>

                        <input type="checkbox" name="color" id="white" value="wte" />
                        <label for="white">White</label>

                        <input type="checkbox" name="color" id="wood" value="wod" />
                        <label for="wood">Wooden</label>
                    </div>
                    <div class="hammer_images">
                        <figure>
                            <img src="../images/Club_Hammer2.png" alt="Club Hammer" width="100" />
                            <!-- Image recieved from marinaredretouch2, https://www.freepik.com/premium-psd/hammer-mans-hand-blank-background_339215512.htm#from_element=cross_selling__psd-->
                            <figcaption>Club Hammer, Red Finish</figcaption>
                        </figure>
                        <!-- Image recieved from freepik, https://www.freepik.com/free-photo/close-up-hammer-nails_49590268.htm#fromView=search&page=1&position=35&uuid=855388ac-4801-41a5-8453-2dfbf93e2a96&query=ball+peen+hammer-->
                        <figure>
                            <img src="../images/Claw_Hammer2.png" alt="Claw Hammer" width="100" />
                            <figcaption>Claw Hammer, Blue Finish</figcaption>
                        </figure>
                        <!-- Image recieved from freepik, https://www.freepik.com/free-photo/view-steel-hammer-construction-work-with-nails_49590270.htm#fromView=search&page=1&position=36&uuid=855388ac-4801-41a5-8453-2dfbf93e2a96&query=ball+peen+hammer-->
                        <figure>
                            <img src="../images/Ball_Peen_Hammer2.png" alt="Ball Peen Hammer" width="100" />
                            <!-- Image recieved from freepik, https://www.freepik.com/free-photo/copy-space-hammer_8453400.htm#fromView=search&page=1&position=4&uuid=855388ac-4801-41a5-8453-2dfbf93e2a96&query=ball+peen+hammer-->
                            <figcaption>Ball Peen Hammer, Wooden Finish</figcaption>
                        </figure>   
                    </div>
                </fieldset>
                <h2>Shipping Information</h2>
                <fieldset>
                    <legend>Shipping Information</legend>
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" />
                         
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" />
                         
                    </div>
                    <div>
                        <label for="address">Address Line 1</label>
                        <input id="address" type="text" name="address" />
                    </div>
                    <div>
                        <label for="province">Province</label>
                        <select name="province" id="province">
                            <optgroup label="provinces">
                                <option value="AB">Alberta</option>
                                <option value="BC">British Columbia</option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NF">Newfoundland</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="PQ">Quebec</option>
                                <option value="SK">Saskatchewan</option>
                            </optgroup>
                            <optgroup label="territories">
                                <option value="NT">Northwest Territories</option>
                                <option value="NV">Nunavut</option>
                                <option value="YK">Yukon</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input id="phone" type="tel" name="phone" />
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" />                        
                    </div>
                </fieldset>
                <h2>Feedback</h2>
               <fieldset>
                    <legend>Feedback</legend>
                    <div class = "Feedback">
                        
                        <label for="comments">Additional Comments</label>
                        <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter any additional comments here..."></textarea>
               </fieldset>
                <button type="reset">Reset</button> <button type="submit">Submit</button>
            </form>
            <h4>Return Home</h4>
            <div class="links"><a href="index.php" title="Return to Home">Return to Home</a></div>
        </main>
        <footer>
            <p><small>©Hammer Corp. All rights reserved</small></p>
        </footer>
	</body>
</html>