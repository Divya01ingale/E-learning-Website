<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?><!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css\E-dash.css">
    <!-- Boxicons CDN Link -->
    <link href='D:\E Learning\updated\E_dashboard.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <span class="logo_name">Learn & Grow</span>
    </div>
        <ul class="nav-links">
        <li>
          <a href="Info_C.html"  >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name"> C </span>
          </a>
        </li>
        <li>
          <a href="Info_C++.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">C++</span>
          </a>
        </li>
        <li>
          <a href="Info_css.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">CSS</span>
          </a>
        </li>
        <li>
          <a href="Info_java.html">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Java</span>
          </a>
        </li>
        <li>
          <a href="Info_HTML.html">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">HTML</span>
          </a>
        </li>
         <li>
          <a href="Info_python.html">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Python</span>
          </a>
        </li>      
        <li class="log_out">
         
            <i class='bx bx-log-out'></i>
            <a href="logout.php" class="span">Log out</a>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><FONT COLOR="#326872"><i>INTRODUCTION TO PROGRAMMING LANGUAGES</i></FONT></span>
      </div>
      
     
    </nav>

    <div class="home-content">
      
      </div>
    </div>
    <div class="sales-boxes">
        <div class="recent-sales box">
         <h3><p>     A programming language is a set of symbols, grammars and rules with the help of which one is
able to translate algorithms to programs that will be executed by the computer. The programmer
communicates with a machine using programming languages. Most of the programs have a
highly structured set of rules.
The primary classifications of programming languages are: Machine Languages. Assembly
Languages. High level Languages. </p></h3>
<br>
          <h2> <FONT COLOR="RED"> Machine Language </FONT></h2><br>
          <h3><p>
Machine language is a collection of binary digits or bits that the computer reads and interprets.
Machine language is the only language a computer is capable of understanding. Machine level
language is a language that supports the machine side of the programming or does not provide
human side of the programming. It consists of (binary) zeros and ones. Each instruction in a
program is represented by a numeric code, and numerical addresses are used throughout the
program to refer to memory locations in the computer’s memory. Microcode allows for the
expression of some of the more powerful machine level instructions in terms of a set of basic
machine instructions.</h3><br><br>
<h2><FONT COLOR="RED">Assembly language</FONT></h2><br>
<h3>Assembly language is easier to use than machine language. An assembler is useful for detecting
programming errors. Programmers do not have the absolute address of data items. Assembly
language encourage modular programming<br></h3>
<br>
<h2><FONT COLOR="RED">High level language</FONT></h2><br>
<h3>High level language is a language that supports the human and the application sides of the
programming. A language is a machine independent way to specify the sequence of operations
necessary to accomplish a task. A line in a high level language can execute powerful operations,
and correspond to tens, or hundreds, of instructions at the machine level. Consequently more
programming is now done in high level languages. Examples of high level languages are BASIC,
FORTRAN etc </p></h3>

          
          <div class="sales-details">
           
          </div>
          
        </div>

  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

