<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <!-- header starts-->
      <header id="p-header">
        <figure class="p-logo">
            <h2 class="nav-h">My<span>Portfolio</span></h2>
        </figure>

        <nav aria-label="main-menu">
            <ul role="menubar">
                 <li role="none">
                    <a href="#home" class="nav-link" role="menuitem">Home</a>
                 </li>
                 <li role="none">
                    <a href="#about" class="nav-link" role="menuitem">About</a>
                 </li>
                 <li role="none">
                  <a href="#archive" class="nav-link" role="menuitem">Archives</a>
                 </li>
                 <li role="none">
                    <a href="#services" class="nav-link" role="menuitem">Service</a>
                 </li>
                 <li role="none">
                    <a href="#skills" class="nav-link" role="menuitem">Skills</a>
                 </li>
                 <li role="none">
                    <a href="project_dashboard.php" class="nav-link" role="menuitem" target="blank">Project</a>
                 </li><li role="none">
                  <a href="cv/cv_project26.html" class="nav-link" role="menuitem" target="blank">CV</a>
                 </li>
                 <li role="none">
                    <a href="#contact" class="nav-link" role="menuitem">Contact</a>
                 </li>
                 <li role="none">
                    <a href="admin_login.php" class="nav-link" role="menuitem">Admin</a>
                 </li>
            </ul>
        </nav>
      </header>
      <!-- header end -->

      <!--main start  -->
      <main>
           <!-- banner -->
            <section class="bannaer-section" id="home">
               <article>
                    <h1 class="p-heading">Md Salman Ahmad</h1>
                    <p class="p-description text-justify" >Hey, I'm Salman, a creative and versatile graphic designer with a keen eye for detail. I specialize in creating visually stunning designs that convey a bran's message and captivate its audience. I'm well-versed in a variety of design software and techniques, and I'm always looking for new ways to enhance my skills. When I'm not designing, I enjoy reading and spending time with my pets.</p>
                </article>
               <aside> <img src="images/05.jpg" alt="image" class="img1"></aside>
            </section>
           <!-- about section -->
            <section class="about section-center" id="about">
               <h2 class="about-heading">About Me</h2>
               <div class="card-container">
                  <div class="card">
                     <h2 class="card-header">Education</h2>
                     <p class="card-description">
                        I have study in computer science & engineering from Sheikh Hasina University. Throughout my academic journey, I developed a strong foundation in programming, which I am eager to apply professionally.
                     </p>
                     <button type="submit" class="card-btn btn">Read More....</button>
                  </div>

                  <div class="card">
                     <h2 class="card-header">Skills</h2>
                     <p class="card-description">
                        As a creative and versatile graphic designer, I excel at crafting visually compelling designs that effectively communicate a brand's message and captivate its audience. With a strong foundation in various design software and techniques. Additionally, my skills in HTML, CSS, and JavaScript allow me to bring designs to life on digital platforms, ensuring seamless user experiences.
                     </p>
                     <button type="submit" class="card-btn btn">Read More....</button>
                  </div>

                  <div class="card">
                     <h2 class="card-header">Experience</h2>
                     <p class="card-description">
                        As a creative and versatile graphic designer with over five years of experience, I specialize in developing visually compelling designs that enhance brand identity and captivate audiences. Proficient in Adobe Creative Suite, I excel in crafting digital and print assets, including logos, brochures, and social media graphics. My strong attention to detail and passion for innovative design ensure that each project I undertake not only meets but exceeds client expectations.
                     </p>
                     <button type="submit" class="card-btn btn">Read More....</button>
                  </div>
               </div>
            </section>
            <!-- about and -->
            <!-- archives start -->
             <section class="archives section-center" id="archive">
               <h2 class="archives-heading">Archives</h2>
               <div class="archives-container">
                  <ul class="archives-container-ul">
                     <li class="archives-container-li">
                        <img src="images/s4.jpg" alt="Image 1" class="archives-img">
                     </li>
                     <li class="archives-container-li">
                        <img src="images/s5.jpg" alt="Image 2" class="archives-img">
                     </li>
                     <li class="archives-container-li">
                        <img src="images/water-lily.jpg" alt="Image 3" class="archives-img">
                     </li>
                     <li class="archives-container-li">
                        <img src="images/002.jpeg" alt="Image 4" class="archives-img">
                     </li>
                     <li class="archives-container-li">
                        <img src="images/s6.jpg" alt="Image 5" class="archives-img">
                     </li>
                  </ul>
               </div>
             </section>

            <!-- archives start -->
            <!-- service start -->
            <section class="service section-center" id="services">
               <h2 class="services-heading">Services</h2>
               <div class="card-containers2">

                  <div class="card2">
                      <img class="image-style" src="images/13.jpg">
                      <div class="card-body">
                          <div class="card-title">
                               App Design
                          </div>
                          <div class="card-desc">
                              <p>App design is crucial because it directly impacts user experience, engagement, and retention. A well-designed app is intuitive, visually appealing, and easy to navigate, which encourages users to spend more time interacting with it. Good design also helps in communicating the brand's message effectively and can significantly influence the app's success in the competitive market.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card2">
                      <img class="image-style" src="images/10.jpg">
                      <div class="card-body">
                          <div class="card-title">
                               Web Design
                          </div>
                          <div class="card-desc">
                              <p>Web design is crucial because it serves as the digital face of a brand or business, impacting the user's first impression. Good web design enhances user experience by making navigation intuitive and content accessible, which helps retain visitors and improve engagement. </p>
                          </div>
                      </div>
                  </div>
                  <div class="card2">
                      <img class="image-style" src="images/13.jpg">
                      <div class="card-body">
                          <div class="card-title">
                               Logo Design
                          </div>
                          <div class="card-desc">
                              <p>Logo design is crucial because it serves as the visual cornerstone of a brand's identity. A well-designed logo helps to establish brand recognition, differentiate the business from competitors, and communicate the company's values and personality. It's often the first impression customers have, making it essential for building trust and credibility. A strong logo can also enhance marketing efforts and contribute to long-term brand loyalty.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card2">
                     <img class="image-style" src="images/13.jpg">
                     <div class="card-body">
                         <div class="card-title">
                              Banner Design
                         </div>
                         <div class="card-desc">
                             <p>Banner design is crucial because it serves as a key visual tool for grabbing attention and conveying important messages quickly. A well-designed banner can enhance brand visibility, attract potential customers, and drive engagement by using compelling visuals and clear, concise text. Effective banner design helps establish a strong first impression and can significantly impact the success of marketing campaigns.</p>
                         </div>
                     </div>
                 </div>
              </div>

            </section>
            <!-- service end -->

            <!-- skills start -->
             <section class="skills" id="skills">
               <div class="card-skill">
                  <div class="card-title">
                      <h2 class="skills-heading">Skills</h2>
                  </div>
                  <div class="card-desc3">
                       <div class="skills-container">
                        <ul>
                           <li class="html">HTML</li>
                           <li class="css">CSS</li>
                           <li class="bootstrap">Bootstrap</li>
                           <li class="js">JavaScript</li>
                           <li class="node">Node.js</li>
                           <li class="php">PHP</li>
                           <li class="jquery">JQuery</li>
                           <li class="express">Express.js</li>
                           <li class="react">React.js</li>
                          </ul>
                       </div>
                  </div>

               </div>

             </section>
             <!-- skill end -->

            <!-- contact start -->
             <section class="contact-section section-center" id="contact">
               <h2 class="contact-heading">Contact Me</h2>
               <form action="process_form.php" method="POST" id="contact-form">
                  <div class="form-control">
                       <label for="name">Name : </label>
                       <input type="text" id="name" name="name" required>    
                  </div>
                  <div class="form-control">
                       <label for="email">Email : </label>
                       <input type="email" id="email" name="email" required>    
                  </div>
                  <div class="form-control">
                       <label for="message">Message : </label>
                       <textarea name="message" id="message"></textarea>
                  </div>
                  <div class="form-control">
                       <button type="submit" class="contact-btn">Submit</button>   
                  </div>
               </form>


             </section>
             <!-- contact end -->

      </main>
      <!--main end  -->
      <!-- footer -->
      <footer class="common-f">
         <div class="common-section">
            <div class="fs1">
               <h3 class="fs-head">Company</h3>
               <P><a href="#home" class="f-btn">Home</a></P>
               <P><a href="#contact" class="f-btn">Contact</a></P>
               <P><a href="#about" class="f-btn">About</a></P>
               <P><a href="#home" class="f-btn">Started</a></P>
            </div>
            <div class="fs1">
               <h3 class="fs-head">Services</h3>
               <P><a href="#services" class="f-btn">App design</a></P>
               <P><a href="#services" class="f-btn">Logo design</a></P>
               <P><a href="#services" class="f-btn">Web design</a></P>
               <P><a href="#services" class="f-btn">Banner design</a></P>
            </div>
            <div class="fs1">
               <h3 class="fs-head">Account</h3>
               <P><a href="#home" class="f-btn">Profile</a></P>
               <P><a href="#home" class="f-btn">My account</a></P>
               <P><a href="#home" class="f-btn">Prefrences</a></P>
               <P><a href="#home" class="f-btn">Purchas</a></P>
            </div>
            <div class="fs1">
               <h3 class="fs-head">Experience</h3>
               <P><a href="#skills" class="f-btn">HTML & CSS</a></P>
               <P><a href="#skills" class="f-btn">JavaScript</a></P>
               <P><a href="#archive" class="f-btn">Photography</a></P>
               <P><a href="#archive" class="f-btn">Photoshop</a></P>
            </div>
         </div>

         <div class="social-media">
            <button class="btnff" onclick="window.open('https://www.facebook.com/profile.php?id=100010142117798&mibextid=ZbWKwL')" class="request-callback"><i class="fa-brands fa-square-facebook"></i></button>
            <button class="btnfy" onclick="window.open('https://youtube.com/@22.salmanahmad24?feature=shared')" class="request-callback"><i class="fa-brands fa-square-youtube"></i></button>
            <button class="btnfi" onclick="window.open('')" class="request-callback"><i class="fa-brands fa-square-instagram"></i></button>
            <button class="btnfe" onclick="window.open('')" class="request-callback"><i class="fa-regular fa-envelope"></i></button>
            <button class="btnft" onclick="window.open('https://twitter.com/Floyd224479?t=PtF2ilzawFBusU9aLtz3ug&s=09')" class="request-callback"><i class="fa-brands fa-square-twitter"></i></button>
            <button class="btnfl" onclick="window.open('')" class="request-callback"><i class="fa-brands fa-linkedin"></i></button>
            <button class="btnfp" onclick="window.open('')" class="request-callback"><i class="fa-solid fa-square-phone-flip"></i></button>
            <div class="footer-bottom">
               <p class="copy">Copyright &copy; Md Salman Ahmad  All rights</p>
            </div>
         </div>
      </footer>
      <!-- footer -->
</body>
</html>