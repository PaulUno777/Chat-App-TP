<?php
    include("static/_header.html")
?>
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-button btn-active" onclick="login()">Log In</button>
        <button type="button" class="toggle-button" onclick="signUp()">Register</button>
    </div>
    <section class="form">
        <form action="#" id="login">
            <div class="error-text">this is an error message</div>
            <div class="field input">
                <input type="text" name="outPseudo" placeholder="Your Pseudo" required>
            </div>
            <div class="field input">
                <input type="password" name="outPassword"  placeholder="Password" required>
                <i class="fa fa-eye"></i>
            </div>
            <div class="check-box">
                <input type="checkbox"><span> Remenber me</span>
            </div>
            <div class="field">
                <input type="submit" value="Start now" class="submit button">
            </div>
        </form>

        <form action="#" id="signUp" class="disable" >
            <div class="error-text"></div>
            <div class="field input">
                <input type="text" name="pseudo" placeholder="Your Pseudo" required>
            </div>
            <div class="field input">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field input">
                <input type="password" name="passwordVerif" placeholder="Repeat Password" required>
            </div>
            <div class="field input">
                <input type="email" name="email" placeholder="Your e-mail" required>
            </div>
            <div class="avatar">
                <div class="avatar-field">
                    <label for="avatar" class="avatar-label"> Select Avatar</label>
                    <input type="file" class="avatar-input" name="avatar" id="avatar" required/>
                </div>
                <div class="avatar-field">
                    <img src="static/img/avatar.png" class="avatar-img" alt="">
                </div>
            </div>
            <div class="check-box">
                <input type="checkbox" name="policyCb"><span> Agree all <a href="static/policy.html">terms & conditions</a></span>
            </div>
            <div class="field">
                <input type="submit" value="register" class="submit button">
            </div>
        </form>
    </section>
    <script src="static/js/main.js"></script>
<?php
    include("static/_footer.html") 
?>