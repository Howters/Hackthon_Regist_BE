<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hackthon</title>
    <link rel="shortcut icon" href="Login Page/assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{'login page/dashboard.css'}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" 
    crossorigin><link href="https://fonts.googleapis.com/css2? 
    family=Jost&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23a94a611d.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".toggle").click(function(){
                $(".parag").toggle();
            });
        });

        $(document).ready(function(){
            $(".toggle1").click(function(){
                $(".parag1").toggle();
            });
        });


        
    </script>
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <img src="login page/assets/logo.png" alt="">
            <div class="nav-menu">
                <ul>
                    <a href="dashboard.html" id="db"><li style="color: var(--gold);">Dashboard</li></a>
                    <a href="payment.html"><li>Payment</li></a>
                    <a href="timeline.html"><li>Timeline</li></a>
                </ul>
            </div>
            <a href="logout.html"><p>Logout</p></a>
        </div>
    </nav>

    <section id="landing-page">
        <div class="container">
            <div class="desc">
                <h2>Welcome, (Nama Team)!!</h2>
                <p>Scroll down to check and update data!</p>
            </div>
            <img src="login page/assets/dashboard.png" alt="">
        </div>
    </section>
    <section id="dropdown">
        <div class="container">
            <div class="dropdown">
                <div class="toggle">
                    <button">
                        <p>Leader Data<i class="fa fa-caret-down"   aria-hidden="true" style="font-size: 20px;"></i></p>
                        
                    </button>
                    
                </div>
    
                <div class="parag">
                    <p style="text-align: center;">Leader Information</p>

                    <form>
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="name" style="display: block;">Full Name</label>
                            <input type="text" placeholder="Full Name" id="fullName" readonly disabled="disabled">
                            </div>

                            <div class="input">
                                <label for="lineid" style="display: block;">LINE ID</label>
                            <input type="text" placeholder="LINE ID" id="lineid">
                            </div>
                            

                            
                        </div>

                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="name" style="display: block;">E-mail</label>
                            <input type="email" placeholder="E-mail" id="E-mail">
                            </div>

                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth place</label>
                            <input type="text" placeholder="Birthplace" id="birthplace">
                            </div>
                            

                            
                        </div>

                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="WA" style="display: block;">Whatsapp Number</label>
                            <input type="tel" placeholder="Whatsapp Number" id="wa">
                            </div>

                            <div class="input">
                                <label for="birthdate" style="display: block;">Birth date</label>
                            <input type="text" placeholder="Birth date" id="birthdate">
                            </div>
                            

                            
                        </div>
                        
                        <div class="column" style="display: flex; justify-content: center; margin-bottom: 2rem;" >
                            <div class="input">
                                <label for="WA" style="display: block;">Github/Gitlab ID</label>
                            <input type="text" placeholder="Github/Gitlab ID" id="wa">
                            </div>
                            

                            
                        </div>


                    </form>

                    <p style="text-align: center;">Click to Preview</p>

                    <div class="viewBukti">
                    <!-- Yang href nya nnti di ganti aja -->

                        <a href="assets/favicon.png" target="_blank"><p>ID Card (*Non-Binusian only)</p></a> 
                        <a href="assets/favicon.png" target="_blank"><p>Curriculum Vitae</p></a> 
                        <a href="assets/favicon.png" target="_blank"><p>Flazz Card (*Binusian only)</p></a> 
                    </div>
                </div>
                
            </div>

            <div class="dropdown">
                <div class="toggle1">
                    <button">
                        <p>Add Member<i class="fa fa-caret-down"   aria-hidden="true" style="font-size: 20px;"></i></p>
                        
                    </button>
                    
                </div>
    
                <div class="parag1">
                    <form action="">
                        <div class="addMember">
                            <p style="text-align: center; margin-bottom: 2.5rem;">ADD MEMBER 1</p>
                            <div class="column" style="display: flex;">
                                <div class="input">
                                    <label for="name" style="display: block;">Full name</label>
                                <input type="text" placeholder="Your full name">
                                </div>
    
                                <div class="input">
                                    <label for="birthplace" style="display: block;">Birth place</label>
                                <input type="text" placeholder="Your birth place" id="birthplace">
                                </div>
    
                            </div>   
                                
                                
    
    
                
                            
    
                            
    
                            <div class="column" style="display: flex;">
                                <div class="input">
                                    <label for="email" style="display: block;">E-mail</label>
                                <input type="email" placeholder="Your e-mail address">
                                </div>
    
                                <div class="input">
                                    <label for="birthplace" style="display: block;">Birth date</label>
                                <input type="text" placeholder="Your birth date">
                                </div>
    
                            </div>       
    
                            
                            <div class="column" style="display: flex;">
                                <div class="input">
                                    <label for="tel" style="display: block;">Whatsapp Number</label>
                                <input type="tel" placeholder="Your whatsapp number">
                                </div>
    
                                <div class="input">
                                    <label for="CV" style="display: block;">Upload CV</label>
                                <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                                </div>
    
                               
    
                            </div>    
                            
                            <div class="column" style="display: flex;">
                                <div class="input">
                                    <label for="lineID" style="display: block;">LINE ID</label>
                                <input type="text" placeholder="Your LINE ID">
                                </div>
    
                                <div class="input">
                                    <label for="flazz" style="display: block;">Upload Flazz Card (*Binusian only)</label>
                                <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                                </div>
    
                               
    
                            </div>       
    
                            <div class="column" style="display: flex;">
                                <div class="input">
                                    <label for="github" style="display: block;">Github/Gitlab ID</label>
                                <input type="text" placeholder="Your Github/Gitlab ID">
                                </div>
    
                                <div class="input">
                                    <label for="IDcard" style="display: block;">Upload ID card (*Non-Binusian only)</label>
                                <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                                </div>
    
                               
    
                            </div>       
                                
                                
    
    
                
                            
    
                            
                    </div>
    
                    <div class="addMember">
                        <p style="text-align: center; margin-bottom: 2.5rem;">ADD MEMBER 2</p>
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="name" style="display: block;">Full name</label>
                            <input type="text" placeholder="Your full name">
                            </div>
    
                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth place</label>
                            <input type="text" placeholder="Your birth place" id="birthplace">
                            </div>
    
                        </div>   
                            
                            
    
    
            
                        
    
                        
    
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="email" style="display: block;">E-mail</label>
                            <input type="email" placeholder="Your e-mail address">
                            </div>
    
                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth date</label>
                            <input type="text" placeholder="Your birth date">
                            </div>
    
                        </div>       
    
                        
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="tel" style="display: block;">Whatsapp Number</label>
                            <input type="tel" placeholder="Your whatsapp number">
                            </div>
    
                            <div class="input">
                                <label for="CV" style="display: block;">Upload CV</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>    
                        
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="lineID" style="display: block;">LINE ID</label>
                            <input type="text" placeholder="Your LINE ID">
                            </div>
    
                            <div class="input">
                                <label for="flazz" style="display: block;">Upload Flazz Card (*Binusian only)</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>       
    
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="github" style="display: block;">Github/Gitlab ID</label>
                            <input type="text" placeholder="Your Github/Gitlab ID">
                            </div>
    
                            <div class="input">
                                <label for="IDcard" style="display: block;">Upload ID card (*Non-Binusian only)</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>       
                        
                    </div>
    
    
                    <div class="addMember">
                        <p style="text-align: center; margin-bottom: 2.5rem;">ADD MEMBER 3</p>
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="name" style="display: block;">Full name</label>
                            <input type="text" placeholder="Your full name">
                            </div>
    
                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth place</label>
                            <input type="text" placeholder="Your birth place" id="birthplace">
                            </div>
    
                        </div>   
                            
                            
    
    
            
                        
    
                        
    
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="email" style="display: block;">E-mail</label>
                            <input type="email" placeholder="Your e-mail address">
                            </div>
    
                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth date</label>
                            <input type="text" placeholder="Your birth date">
                            </div>
    
                        </div>       
    
                        
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="tel" style="display: block;">Whatsapp Number</label>
                            <input type="tel" placeholder="Your whatsapp number">
                            </div>
    
                            <div class="input">
                                <label for="CV" style="display: block;">Upload CV</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>    
                        
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="lineID" style="display: block;">LINE ID</label>
                            <input type="text" placeholder="Your LINE ID">
                            </div>
    
                            <div class="input">
                                <label for="flazz" style="display: block;">Upload Flazz Card (*Binusian only)</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>       
    
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="github" style="display: block;">Github/Gitlab ID</label>
                            <input type="text" placeholder="Your Github/Gitlab ID">
                            </div>
    
                            <div class="input">
                                <label for="IDcard" style="display: block;">Upload ID card (*Non-Binusian only)</label>
                            <input type="file" placeholder="Upload in pdf, jpg, jpeg and png" required accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
    
                           
    
                        </div>       
                        
                    </div>
    
                   
                    <div id="submit" style="padding-top: 3.5rem;">
                        <button type="submit" id="submit">Confirm and Submit</button>
                    </form>
                </div>
                

                    
                
            </div>

            <section id="cp">
                <div class="container">
                    <h1>Contact Person</h1>
                    <div class="cp-content">
                        <div class="row">
                            <div class="columns">
                                <img src="login page/assets/person.png" alt="">
                                <div class="cp-desk">
                                    <p>M. Rizki</p>
                                    <p>Phone : 087896643456</p>
                                    <p>Line  : m.rizki</p>


                                </div>
                            </div>
                            <div class="columns">
                                <img src="login page/assets/person.png" alt="">
                                <div class="cp-desk">
                                    <p>R. Arthur </p>
                                    <p>Phone : 087855456782</p>
                                    <p>Line  : richard.a</p>


                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>

                
            </section>

           
          
            
            

        

    </section>

    
    <footer>
        <div class="socmed">
            <div class="socmed-icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa fa-envelope"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
            <p>Social Media</p>
        </div>

        <div class="copyright">
            <p>
                Powered and Organized by Bina Nusantara Computer Club
            </p>
            <a href=""><p>Privacy Policy and Terms of Service</p></a>
        </div>
        
    </footer>
    
    
</body>

</html>