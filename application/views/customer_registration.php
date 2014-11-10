<html>
    <head>
        <title>Create New Customer Account</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sign_up_form.css" />
    </head>
    <body>
        <div class="container">
            <form action="<?php echo base_url();?>checkout/customer_login_check" method="post">
                <div class="login_info">
                    <div class="personal_info_title">
                        <p>Log in</p>
                        <div style="color: red; font-size: 15px; width: 300px;" align="right">
                            <?php
                                $exception=$this->session->userdata('exception');
                                if(isset($exception))
                                {
                                    echo $exception;
                                    $this->session->unset_userdata('exception');
                                }
                            ?>
                        </div>
                        <div class="personal_info">
                            <div class="half_box">
                                <span class="box_title">Email</span><br />
                                <input class="half_box_input" type="text" name="email_address" value=""/>              
                            </div>
                            <div class="half_box">
                                <span class="box_title">Password</span><br />
                                <input class="half_box_input" type="password" name="password" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit_btn">
                    <button class="btn" type="submit" >
                        <spa>Submit</spa>
                    </button>
                </div>
            </form>
            <div class="create_an_account">Create an Account</div>
            <form action="<?php echo base_url();?>checkout/save_customer" method="post">

            <div class="personal_info_title">
                <p>Personal Information</p>

                <div class="personal_info">
                    <div class="half_box">
                        <span class="box_title">First Name</span><br />
                        <input class="half_box_input" type="text" name="first_name" value=""/>              
                    </div>
                    <div class="half_box">
                        <span class="box_title">Last Name</span><br />
                        <input class="half_box_input" type="text" name="last_name" value=""/>
                    </div>
                    <div class="half_box">
                        <span class="box_title">Email Address</span>&nbsp;<span id="result"></span><br />
                        <input class="half_box_input" type="email" name="email_address" onblur=" makerequest('<?php echo base_url();?>home/ajax_email_check/','result',this.value);" />
                    </div>
                    <div class="half_box">
                        <span class="box_title">Cell Number</span><br />
                        <input class="half_box_input" type="text" name="cell_number" value=""/>
                    </div>
                    <div class="check_box">
                        <input class="check_box_input" type="checkbox" name="" value="" /><span>Sign Up for Newsletter</span>
                    </div>
                </div>
            </div>
            <div class="address_info">
                <p>Address Information</p>
                <div class="personal_info">
                    <div class="full_box">
                        <span class="box_title">Street Address</span><br />
                        <textarea rows="5" cols="70" name="address"> </textarea> 
                    </div>
                    <div class="half_box">
                        <span class="box_title">City</span><br />
                        <input class="half_box_input" type="text" name="city" value=""/>              
                    </div>
                    <div class="half_box">
                        <span class="box_title">District/State</span><br />
                        <input class="half_box_input" type="text" name="district" value=""/>
                    </div>
                    <div class="half_box">
                        <span class="box_title">Zip/Postal Code</span><br />
                        <input class="half_box_input" type="text" name="zip_code" value=""/>
                    </div>
                    <div class="half_box">
                        <span class="box_title">Country</span><br />
                        <input class="half_box_input" type="text" name="country" value=""/>
                    </div>
                   
                </div>
            </div>

            <div class="login_info">
                <div class="personal_info_title">
                    <p>Login Information</p>
                    <div class="personal_info">
                        <div class="half_box">
                            <span class="box_title">Password</span><br />
                            <input class="half_box_input" type="password" name="password" value=""/>              
                        </div>
                        <div class="half_box">
                            <span class="box_title">Confirm Password</span><br />
                            <input class="half_box_input" type="password" name="confirm_password" value=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit_btn">
                <button class="btn" type="submit" >
                    <span>Submit</span>
                </button>
            </div>
           </form>

        </div>
    </body>
</html>