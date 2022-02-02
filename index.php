<?php
    include_once 'standard/head.php';
    include_once 'standard/jumbotron.php';
?>

<div class="open e-form">
        <form method="post">
            <div class="exit">
                <div class="exit-button exit-b">
                    <a target="_blank" class="contact-icon">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <input placeholder="First Name" type="text" name="fname">
            <input placeholder="Last Name" type="text" name="lname">
            <input placeholder="Email" type="text" name="email">
            <textarea placeholder="Message" name="message"></textarea>
            <input value="Send" type="submit" name="submit">
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
                echo "<script>alert('Fill in all fields.');</script>";
            }
        }
    ?>

<div class="wrapper">
        <section class="introduction">
            <div class="picture-card">
                <img src="assets/images/selfie.jpg">
            </div>
            <div class="intro-text">
                <h1>I'm a</h1>
                <ul class="dynamic-txts">
                    <li><span><span class="theme">D</span>eveloper</span></li>
                    <li><span><span class="theme">D</span>esigner</span></li>
                    <li><span><span class="theme">V</span>ideo Editor</span></li>
                    <li><span><span class="theme">F</span>reelancer</span></li>
                </ul>
            </div>
        </section>
        <section class="skills">
            <h1><span class="theme">S</span>kills</h1>
            <div class="s-card">
                <p>Primary skills</p>
                <div class="skillz">
                    <div class="skills1">
                        <p>C#</p>
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
            <h1><span class="theme">P</span>rojects</h1>
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
            <h1><span class="theme">A</span>bout me</h1>
            <p class="description">I'm an upcoming Software Developer who is currently perfecting his skills.</p>
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
            <h1><span class="theme">C</span>ontact me</h1>
            <div class="card">
                <ul class="socials">
                    <li class="social">
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-brands fa-snapchat-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-brands fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-brands fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <div class="popup">
                    <div class="exit">
                        <div class="exit-button exit-b">
                            <a target="_blank" class="contact-icon">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <p class="info"></p>
                    <div class="copy-button">Copy to clipboard</div>
                </div>
                <div class="email-card">
                    <p>Send me an e-mail:</p>
                    <div class="gmail">
                        <a target="_blank" class="contact-icon">
                            <i class="fa fa-brands fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
    include_once 'standard/footer.php';
?>