<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        
       
        <script src="functn.js" type="text/javascript"></script>
        <meta name="viewport" content-type="width=device-width initial-scale=1"/>
        <link href="css/designing.css" rel="stylesheet" type="text/css"/>
       
        <title>CouP</title>
    </head>
    <body>
        
        <header class="head">
            <div class="container">
                <nav>
                    <div class="resp-menu " onclick="showmenu()">
                        <img id="menu-icon" src="images/menu_icon.png" alt=""/>
                    
                    </div>
                    <div class="logo">
                        <!--<img src="images/Logo_TV_2015.png" alt="coup"/> -->
                        <h1>CouP</h1>
                </div>
                    <div class="menu-bar">
                        <ul>
                            <li><a href="#">category</a></li>
                            <li><a href="#">category</a></li>
                            <li><a href="#">category</a></li>
                            <li><a href="#">category</a></li>
                            
                        </ul>
                    </div>
                    <div class="search">
                        <form method="POST" >
                            <input type="search" class="search-open" placeholder="search" id="search" name="search" />
                          
                            <input type="submit" value=" "  id="search-btn" name="search-btn"/>
                           
                        </form>
                        
                    </div>
            
            </nav>
            </div>
        </header>
        
        <div class="main">
            <div class="first-look">
                <h1>hey! this is a prototype</h1>
            </div>
            <div class="slider-box">

                <img id="mob-slider-pic"src="images/imageph.png" alt=""/>
                <div class="images-mob">
                    <img class="img-comp" src="images/img1.png" alt=""/>
                    <img class="img-comp" src="images/img2.png.jpg" alt=""/>
                    <img class="img-comp" src="images/img3.png" alt=""/>
                    
                    <div id="right-holder" onclick="btnslide(1)"></div>
                    <div id="left-holder" onclick="btnslide(-1)"></div>
                </div>
                
 <!---------------------------------------------------------------------------------------------------  
 gor laptop and desktop slider
                <img id="lap-slider-pic" src="images/lap-icon.png" alt=""/>
                               
                <div class="images-lap">
                    <img class="img-lap" src="images/img1.png" alt=""/>
                    <img class="img-lap" src="images/img2.png.jpg" alt=""/>
                    <img class="img-lap" src="images/img3.png" alt=""/>
                    
                    <div id="lap-right-holder" onclick="lapbtnslide(1)"><h1>kk</h1></div>
                    
                   
                </div>
 <!---------------------------------------------------------------------------------------------------  
 <img id="desk-slider-pic" src="images/desktop-icon.png" alt=""/>
 
 <div class="images-desk">
                    <img class=,"img-desk" src="images/img1.png" alt=""/>
                    <img class="img-desk" src="images/img2.png.jpg" alt=""/>
                    <img class="img-desk" src="images/img3.png" alt=""/>
                    
                    <div id="desk-right-holder" onclick="deskbtnslide(1)"><h1>kkl</h1></div>
                    
                   
                </div>
 
 -->
 
                <div class="slider-text">
                    <h1>we <br/>are <br/>everywhere</h1>
                </div>
            </div>
            <div class="segment-1">
                <h1>whats   new</h1>
                <div class="seg-box ">
                <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                 <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                 <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                </div>
            
            </div>
           
             <div class="segment-1" class="red">
                <h1>whats   new</h1>
                <div class="seg-box ">
                <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                 <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                 <div class="seg-content">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nibh a lectus vulputate, id laoreet dolor aliquam. Fusce accumsan sem massa, eu cursus massa consequat non. Pellentesque et tempus arcu. Vivamus venenatis mauris quis lorem bibendum tristique. Donec dolor dui, tincidunt eu quam eu, blandit ultrices enim. Class aptent taciti sociosqu ad litora torquent
                    </p>
                
                </div>
                </div>
            
            </div>
             <div class="how-it-work">
                 <h2>how it works</h2>
                 <div>
                     <img src="images/searchbook.png" alt=""/>
                     <h2>search</h2>
                     <p>Your package includes every thing right from fully furnished AC rooms to professionally managed services. Your entitlement is validated by agreements. Placio ensure you get whatever is promised and agreed.</p>
                 </div>
                 <div>
                     <img src="images/downloadbook.png" alt=""/>
                      <h2>download</h2>
                     <p>Your package includes every thing right from fully furnished AC rooms to professionally managed services. Your entitlement is validated by agreements. Placio ensure you get whatever is promised and agreed.</p>
                 </div>
                 <div>
                     <img src="images/donebook.png" alt=""/>
                      <h2>done</h2>
                     <p>Your package includes every thing right from fully furnished AC rooms to professionally managed services. Your entitlement is validated by agreements. Placio ensure you get whatever is promised and agreed.</p>
                 </div>
                 
                 
            </div>
            
            
        </div>
        <footer>
            
            <div class="footer-tages">
                <ul class="quick-links">
                    <h2>CouP</h2>
                    <li><a href="#">about us</a></li>
                   <li><a href="#">contact us</a></li>
                    <li><a href="#">team</a></li>
                </ul>
                  <ul class="quick-links">
                    <h2>Category</h2>
                    <li><a href="#">one</a></li>
                   <li><a>two</a></li>
                    <li><a>three</a></li>
                        <li><a>four</a></li>
                </ul>
            
            </div>
            <div class="newsletter-tag">
                <form>
                    <input id="newsletter-email" type="email" placeholder="enter your email" />
                    <input id="newsletter-submit"type="submit" placeholder="subscribe" value="subscribe"  />
                </form>
            </div>
            <div class="copyright-tag">
                    <p> 
                        CouP all right reserve
                    </p>
            </div>
        </footer>
    </body>
</html>
