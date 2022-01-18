<?php
    include_once 'standard/head.php';
    include_once 'standard/jumbotron.php';
?>

<div class="wrapper">
        <section class="introduction">
            <div class="e-form">
                <form method="post">
                    <p class="form-exit">x</p>
                    <p>First Name:</p><br>
                    <input type="text" name="fname"> <br>
                    <p>Last Name:</p><br>
                    <input type="text" name="lname"> <br>
                    <p>Email:</p><br>
                    <input type="text" name="email"> <br>
                    <p>Message:</p>
                    <textarea name="message"></textarea> <br>
                    <input type="submit" name="submit">
                </form>
            </div>
            <?php
                global $pdo;
                if(isset($_POST['submit'])){
                    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        
                        $sql = $pdo->prepare("INSERT INTO mails (fname, lname, email, message) VALUES ('$fname', '$lname', '$email', '$message')");
                        $sql->execute();
                    } else {
                        echo '<script>alert("Fill in all fields.");</script>';
                    }
                }
            ?>
            <div class="picture-card">
                <img src="assets/images/selfie.jpg">
            </div>
            <div class="intro-text">
                <h1>I'm a</h1>
                <h3>Software Developer</h3>
                <h3>Back and front end Developer</h3>
                <h4>Video Editor</h4>
                <h4>Photoshopper</h4>
            </div>
        </section>
        <section class="skills">
            <h1>Skills</h1>
            <div class="s-card">
                <p>Primary skills</p>
                <div class="skillz">
                    <div class="skills1">
                        <p>C++</p>
                        <p>Adobe After Effects</p>
                        <p>JavaScript</p>
                        <p>HTML</p>
                        <p>CSS</p>
                        <p>PHP</p>
                    </div>
                    <div class="line"></div>
                    <div class="skills2">
                        <p>Webflow</p>
                        <p>MySQL</p>
                        <p>Web Design</p>
                        <p>Photoshop</p>
                        <p>AHK</p>
                    </div>
                </div>
                <p>Secondary skills</p>
            </div>
        </section>
        <section class="projects">
            <h1>Projects</h1>
            <div class="p-cards">
                <?php
                    global $pdo;
                    $sql = $pdo->prepare("SELECT * FROM projects");
                    $sql->execute();
                    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                    foreach($result as $data) {
                        echo "
                            <div class=" . $data['class'] . ">
                                <img src=" . $data['img'] . ">
                            </div>
                        ";
                    }
                ?>
            </div>
        </section>
        <section class="about">
            <h1>About me</h1>
            <p>I'm an upcoming Software Developer who is currently perfecting his skills.</p>
            <h3>Why me?</h3>
            <div class="reasons">
                <div>
                    <div class="reason">
                        <div class="count">1</div>
                        <p>Quick delivery</p>
                    </div>
                    <div class="reason">
                        <div class="count">2</div>
                        <p>Clean source code</p>
                    </div>
                    <div class="reason">
                        <div class="count">3</div>
                        <p>Cost effective</p>
                    </div>
                    <div class="reason">
                        <div class="count">4</div>
                        <p>Great design backed up by science</p>
                    </div>
                    <div class="reason">
                        <div class="count">5</div>
                        <p>Never the need for another site again</p>
                    </div>
                </div>
                <div>
                    <div class="reason">
                        <div class="count">6</div>
                        <p>Great before and after sale support</p>
                    </div>
                    <div class="reason">
                        <div class="count">7</div>
                        <p>Variety of skills</p>
                    </div>
                    <div class="reason">
                        <div class="count">8</div>
                        <p>Personal assistance</p>
                    </div>
                    <div class="reason">
                        <div class="count">9</div>
                        <p>Creative thinking mind</p>
                    </div>
                    <div class="reason">
                        <div class="count">10</div>
                        <p>Endless possibilities</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <h1>Contact me</h1>
            <div class="card">
                <h2>Socials</h2>
                <div class="socialss">
                    <div class="gmail social">
                        <img src="assets/images/gmail.png">
                    </div>
                    <div class="instagram social">
                        <img src="assets/images/instagram.png">
                    </div>
                    <div class="whatsapp-popup">
                        <p class="w-exit-button">x</p>
                        <p>+31 6 12059599</p>
                        <div class="copy-button">
                            <p>Copy to clipboard!</p>
                        </div>
                    </div>
                    <div class="whatsapp social">
                        <img src="assets/images/whatsapp.png">
                    </div>
                </div>
            </div>
        </section>
<?php
    include_once 'standard/footer.php';
?>