<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}

?>
<html>
    <head>
        <title>
            DaniaMatarCV
        </title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/icons.css">

    </head>

    <body>
        <div id="header">
        
            <div id="dropdown-menu">
                <div><i class="ico burger-ico"></i>MENU</div>
                <div class="dropdown-content">
                    <ul>
                        <a href="page.php">
                            <li><i class="ico ico-l user-ico"></i>Main Page</li>
                        </a>
                        <a href="page1.php">
                            <li><i class="ico ico-l wallet-ico"></i>CV</li>
                        </a>
                        <a href="page2.php">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                        </a>
                        <a href="page3.php">
                            <li><i class="ico ico-l user-ico"></i>Contact me</li>
                        </a>
                    </ul>
                </div>
            </div>
            <p class="welcome">Welcome <?php echo $_SESSION['username']; ?>!</p><form action="" method="post"><input type="submit" name="logout" value="logout" id="logout"></form>
        </div>

    <div class="container">
        <div class="sidebar">
               <div class="profile-img-container"><img id="profile-img" src="../images/profile.jpg"></div> 
                 <div class="profiletxt">
                    <h2>About me</h2>
                    <hr>
                    <p><div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates accusamus quod quis nobis tempora quas, cum ut sunt neque vitae cupiditate omnis ullam est! Illum ex reprehenderit nisi quas ipsam
                    </div> 
                    </p>
                    <br>
                    <h2>Contact info</h2>
                    <hr>
                    <p>
                    <div>
                        <span><h4>Phone nb:</h4>(+961)-76329658</span>
                        <span><h4>Email:</h4>dania.matar@lau.edu</span>
                        <span><h4>Linkedin:</h4><a href="https://www.linkedin.com/in/dania-matar/" target="_blank">linkedin.com/in/dania-matar/</a></span>
                    </div>
                    </p>
                </div>
        </div>
        <div class="rightbar">
            <div class="righttxt">
            <br>
            <h2>Education</h2>
            <hr>
            <p><div>
                <h4>Lebanese American University, Beirut, Lebanon Expected Graduation June 2024</h4>
                <span>BS in Bioinformatics</span> 
                </div>
                <br>
                <div><h4>Lebanese School, Aramoun, Lebanon 2021</h4>
                <span>Lebanese Baccalaureate in Life Sciences</span>
                </div> 
            </p>
            <h2>Experience</h2>
            <hr>
            <h4>Integrated Digital Systems Intern, Beirut, Lebanon 2023</h4>
            <ul>
                <li>Build frontend webpages using HTML/HTML5 and CSS</li>
                <li>Adding interactions to webpages using JavaScript, AJAX and JQuery</li>
                <li>Build up a database using SQL Server 2012/2014</li>
                <li>Develop WebAPIs (.NET Core 5.0/6.0/7.0) to be used along their website</li>
            </ul>
            <h4>Lebanese American University, Beirut, Lebanon January 2022-April 2023</h4>
            <h4>Database Project 2023</h4>
            <ul>
                <li>Designed and implemented a fully functional pharmaceutical database using NetBeans, PHP and Wamp and 
                    MySQL and java for data collection, analysis, and decision-making</li>
                <li>Designed a user-friendly and intuitive interface for easy data entry and retrieval, enhancing user experience</li>
                <li>Implemented a robust relational database schema to ensure accurate and structured storage of pharmaceutical 
                    data</li>
                <li>Created advanced querying functionalities allowing users to perform complex searches, contributing to faster 
                    data analysis</li>
            </ul>

            <h4>Research Project 2023</h4>
            <ul>
                <li>Performed qualitative analysis of the human insulin receptor protein on its composition and role, utilized the 
                    findings to aid in writing the article</li>
                <li>Created a WebLogo and a phylogenetic tree to assess the conservation of structure and divergence of species 
                    among 50 homologous sequences</li>
            </ul>
            <h4>Research Project 2022</h4>
            <ul>
                <li>Conducted qualitative research on the “B-ALPHA-1” protein to understand its structure and function and 
                    contributed to the writing of the article based on the findings</li>
                <li>Created statistic tables to showcase the research findings</li>
            </ul>
            <div>
                <h2>Skills</h2>
                <hr>
                <h4>Tehnical Skills</h4>
                <ul>
                    <li>Programming Languages:
                        Python,
                        Java,
                        R,
                        SQL,
                        HTML,
                        CSS,
                        JavaScript</li>
                    <li>UI/UX Design</li>
                    <li>Data analysis</li>
                    <li>Data Manipulation</li>
                    <li>Gene sequencing</li>
                    <li>Web development</li>
                    <li>Microsoft office</li>
                    <li>Usage of
                            Figma,
                            SPSS,
                            NetworkX</li>
                </ul>
                <h4>Soft Skills</h4>
                <ul>
                       <li>Teamwork</li>
                       <li>Problem-solving</li>
                       <li>Time management</li>
                       <li>Communication</li>
                       <li>Creative thinking</li>
                       <li>Work ethic</li>
                </ul>
            </div>
            <div>
                <h2>Languages</h2>
                <hr>
                <ul>
                    <li>English: Fluent</li>
                    <li>Native Arabic speaker</li>
                </ul>
            </div>
            <div>
                <h2>Extracurriculars</h2>
                <hr>
                <h4>Zaka ai, Fall in love with Machine Learning Workshop</h4>
                <li>Certification for partaking in GitHub coding workshop, February 2023</li>
                <h4>Walter E. Dandy Neurosurgical Club, Neuroanatomy Lecture </h4>
                <li>Joined a Neuroanatomy lecture hosted by Dr. Hussein Darwish at AUBMC, February 2023</li>
                <h4>Bioinformatics Club</h4>
                <li>assisted in the organization of seminars and events for the club, 2021-2022</li>
                <h4>ELIXIR Bioinformatics: Enabling Ecosystems for Machine Learning in the Life Sciences</h4>
                <li>Participating in interactive sessions in online workshop, October 2022</li>
                <h4 style="margin-bottom: 3%;">Hosted game booths for children within the “Orphanage Community”, 2016-2017</h4>
            </div>
            </div>
            <!-- <div id="circle1"></div>
            <div id="circle2"></div>
            <div id="circle3"></div>
            <div id="circle4"></div>
            <div id="circle5"></div>
            <div id="circle6"></div> -->
        </div>
    </div>
    </body>


</html>
