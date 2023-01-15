<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <!-- favicon -->
     <link rel="icon" type="image/x-icon" href="./asset/favicon-logo.png">
     <link rel="stylesheet" href={{ asset('style-reg.css') }}>
     <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
     {{-- <script src="https://kit.fontawesome.com/8258775b27.js" crossorigin="anonymous"></script> --}}
     <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <img src="./asset/background 16.57.54.png" width="100%" alt="">
    <div class="container">
        <div class="heading">
            <h1>Registration</h1>
        </div>
        <section id="form-section">
            <form method="POST" action="/store-group" enctype="multipart/form-data">
                @csrf
                <div id="group-info">
                    <h1>Group Information</h1>
                    <div class="input-group">
                        <div class="name">
                            <div class="input">
                            <label for="group-name">Group Name</label>
                            <input type="text" name="groupName" id="group-name" placeholder="Your group name" required>
                            </div>
                        </div>
                        <div class="password">
                            <div class="input">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" id="pass" placeholder="Your password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-.,/?]).{8,20}$">
                            </div>
                            <div id="pswd_info">
                                <h4>Password must meet the following requirements:</h4>
                                <ul>
                                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                                    <li id="special" class="invalid">At least <strong>one special character(s)</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="confirm-password">
                            <div class="input">
                                <label for="confirm_pass">Confirm Password</label>
                                <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm your password" required onkeyup="validate_password()">
                            </div>
                            <span id='message'></span>
                        </div>
                        <div class="binusian">
                            <input type="radio" name="binus" id="binus" required>Binusian
                            <input type="radio" name="binus" id="binus" required>Non-Binusian
                        </div>
                    </div>
                   
                </div>

                <div id="leader-info">
                    <h1>Leader Information</h1>
                    <div class="input-group">
                        <div class="f-name">
                            <div class="input">
                            <label for="full-name">Full Name</label>
                            <input type="text" name="leaderName" id="full-name" placeholder="Your full name" required >
                            </div>
                        </div>

                        <div class="birth-place">
                            <div class="input">
                                <label for="birth">Birth Place</label>
                                <input type="text" name="leaderPlace" id="birth" placeholder="Your birth place" required>
                            </div>
                        </div>

                        <div class="mail">
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Your e-mail address" required>
                            </div>
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="birth-date">
                            <div class="input">
                                <label for="b-date">Birth Date</label>
                                <input type="date" name="leaderDate" id="b-date" placeholder="Your birth date" required>
                            </div>
                        </div>

                        <div class="wa-num">
                            <div class="input">
                                <label for="num">Whatsapp Number</label>
                                <input type="tel" name="wa" id="num" placeholder="ex: 081378915673" required pattern="[0-9]{9,12}">
                            </div>
                        </div>

                        <div class="file">
                            <div class="input">
                                <label for="cv">Upload CV <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="cv" id="file_upload" accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
                        </div>

                        <div class="id">
                            <div class="input">
                                <label for="line">LINE ID</label>
                                <input type="text" name="line" id="line" placeholder="Your LINE ID" required>
                                @error('line')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="file">
                            <div class="input">
                                <label for="flazz">Upload Flazz Card (*Binusian only) <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="leaderFlazz" id="file_upload" accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
                        </div>

                        <div class="git-id">
                            <div class="input">
                                <label for="git">Github/Gitlab ID</label>
                                <input type="text" name="leaderGit" id="git" placeholder="Your Github/Gitlab ID" required>
                            </div>
                        </div>
                        
                        <div class="file">
                            <div class="input">
                                <label for="id">Upload ID card (*Non-Binusian only) <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="leaderKtp" id="file_upload" accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="create" class="submit_btn" onclick="wrong_pass_alert()">Confirm and Submit</button>
                    <span id="wrong_pass_alert"></span>
                </div>
            </form>
        </section>
    </div>    
</body>
<script>
    function validate_password() {

        var pass = document.getElementById('pass').value;
        var confirm_pass = document.getElementById('confirm_pass').value;
        if (pass != confirm_pass) {
            document.getElementById('wrong_pass_alert').style.color = 'red';
            document.getElementById('wrong_pass_alert').innerHTML
              = 'Cannot submit, Use same password';
            document.getElementById('create').disabled = true;
            document.getElementById('create').style.opacity = (0.4);
        }else {
            document.getElementById('wrong_pass_alert').innerHTML
              = '';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
        }
    }


</script>
</html>