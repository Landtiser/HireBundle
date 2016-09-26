<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HireBundle</title>
        <meta content="Quick, convenient, and mobile-friendly documents to get a well designed resume, website, and custom-branded email to put you ahead of competitors in the job market.">
        <meta content="Chris Landtiser" name="author">
        <link href="https://plus.google.com/115696483608644340158" rel="author">

        <meta content="en_US" property="og:locale">
        <meta content="website" property="og:type">
        <meta content="HireBundle - Everything to Get Ahead in One Spot" property="og:title">
        <meta content="Quick, convenient, and mobile-friendly documents to get a well designed resume, website, and custom-branded email to put you ahead of competitors in the job market." property="og:description">
        <meta content="http://hirebundle.landtiser.com/" property="og:url">
        <meta content="Chris Landtiser" property="og:site_name">
        <meta content="http://landtiser.com/img/social.jpg" name="og:image">

        <meta content="summary" name="twitter:card">
        <meta content="Quick, convenient, and mobile-friendly documents to get a well designed resume, website, and custom-branded email to put you ahead of competitors in the job market." name="twitter:description">
        <meta content="HireBundle - Everything to Get Ahead in One Spot" name="twitter:title">
        <meta content="@landtiser" name="twitter:site">
        <meta content="http://landtiser.com/img/social.jpg" name="twitter:image">
        <meta content="@landtiser" name="twitter:creator">
    </head>
    <body>
        
        <!-- Revision 1.01 -->
        
        <div class="intro">

            <div class="content title">
                <h1>Welcome to HireBundle</h1>
            </div>

            <div class="color-one">
                
                <div class="content">

                    <p>Standing out while job hunting can be a difficult prospect. There are whole careers based on providing <em>other</em>  people r&#233;sum&#233;s and branding help to jump start their careers. You can wade through piles of complicated and awkward r&#233;sum&#233; builders online, but nothing provides simple and effective solutions.</p>

                    <p>Enter HireBundle. By filling out the form below, you get quick and easy access to your resume in:</p>

                    <ul>
                        <li>A Graphically Designed PDF</li>
                        <li>A Word Document (.docx)</li>
                        <li>HTML, Ready to Upload as a Website</li>
                        <li>A Custom Branded HTML Email</li>
                    </ul>

                    <p>Some entry fields include a suggested limit of characters used. While the limit is not strictly enforced, over-filling those fields risks causing layout issues on designed pages, such as the PDF format.</p>
                    <span class="js-content"><p>Use the <img src="img/plus.svg" height="16px" width="16px"> and <img src="img/minus.svg" height="16px" width="16px"> symbols to add or remove extra items in lists, respectively.</p></span>
                    
                </div>

            </div>

        </div>

        <form id="myform" method="post" action="generateResume.php">

            <div class="color-none">
                
                <div class="content">
            
                    <h2>Tell Us a Little About Yourself!</h2>
                    
                </div>
                
            </div>

            <div class="color-two">
                
                <div class="content">
            
                    <div>
                        <label>First Name</label>
                        <input type="text" name="first" id="first" />
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="last" id="last" />
                    </div>
                    <div>
                        <label>Professional Title</label>
                        <input type="text" name="title" id="title" />
                    </div>
                    
                </div>
                
            </div>

            <div class="color-three">
                
                <div class="content">
            
                    <div>
                        <label>Email</label>
                        <input type="text" name="mail" id="mail" />
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone" />
                    </div>
                    <div>
                        <label>Website</label>
                        <input type="text" name="web" id="web" />
                    </div>
                    <div>
                        <label>Other Contact</label>
                        <input type="text" name="media" id="media" value="LinkedIn, Twitter, Etc." />
                    </div>
                    
                </div>
                
            </div>

            <div class="color-four">
                
                <div class="content">
            
                    <div class="last">
                        <label>Personal Statement</label>
                        <textarea name="personal" id="personal"></textarea>
                        <p id="personalContainer" class="error"><span id="personalLimit"></span> / 380</p>
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content">

                    <h2>What Experience Do You Have?</h2>
                    
                </div>
                
            </div>

            <div class="color-one">
                
                <div class="content">

                    <div>
                        <label>Your Title</label>
                        <input type="text" name="title1" id="title1" />
                    </div>
                    <div>
                        <label>Company</label>
                        <input type="text" name="company1" id="company1" />
                    </div>
                    <div class="input">
                        <label>Responsibility</label>
                        <p class="dutyContainer error"><span class="dutyLimit"></span> / 240</p>
                        <input type="text" name="duty1one" id="duty1one" onkeyup="dutyCount()" />
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Responsibility</label>
                        <p class="dutyContainer error"><span class="dutyLimit"></span> / 240</p>
                        <input type="text" name="duty1two" id="duty1two" onkeyup="dutyCount()" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input three last">
                        <label>Responsibility</label>
                        <p class="dutyContainer error"><span class="dutyLimit"></span> / 240</p>
                        <input type="text" name="duty1three" id="duty1three" onkeyup="dutyCount()" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content collapsed">

                    <div class="another last">
                        <h3>Do You Have More Experience to List?</h3>
                        <button type="button" id="exp2Yes">Yes</button>
                        <button type="button" id="exp2No">No</button>
                    </div>
                    
                </div>
                
            </div>

            <div id="exp2">  

                <div class="color-one">

                    <div class="content">
                        
                        <div class="first">
                            <label>Your Title</label>
                            <input type="text" name="title2" id="title2" />
                        </div>
                        <div>
                            <label>Company</label>
                            <input type="text" name="company2" id="company2" />
                        </div>
                        <div class="input">
                            <label>Responsibility</label>
                            <p class="dutyContainer2 error"><span class="dutyLimit2"></span> / 240</p>
                            <input type="text" name="duty2one" id="duty2one" onkeyup="dutyCount2()" />
                            <img class="add" src="img/plus.svg" height="25px" width="25px">
                        </div>
                        <div class="input two">
                            <label>Responsibility</label>
                            <p class="dutyContainer2 error"><span class="dutyLimit2"></span> / 240</p>
                            <input type="text" name="duty2two" id="duty2two" onkeyup="dutyCount2()" />
                            <img class="remove" src="img/minus.svg" height="25px" width="25px"><img class="add" src="img/plus.svg" height="25px" width="25px">
                        </div>
                        <div class="input three last">
                            <label>Responsibility</label>
                            <p class="dutyContainer2 error"><span class="dutyLimit2"></span> / 240</p>
                            <input type="text" name="duty2three" id="duty2three" onkeyup="dutyCount2()" />
                            <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        </div>
                    </div>
                    
                </div>

                <div class="color-none">

                    <div class="content collapsed">

                        <div id="exp3Check" class="another last">
                            <h3>Do You Have More Experience To List?</h3>    
                            <button type="button" id="exp3Yes">Yes</button>
                            <button type="button" id="exp3No">No</button>
                        </div>

                    </div>

                </div>
                
            </div>
            
            <div id="exp3" class="last">

                <div class="color-one">

                    <div class="content">

                        <div class="first">
                            <label>Your Title</label>
                            <input type="text" name="title3" id="title3" />
                        </div>
                        <div>
                            <label>Company</label>
                            <input type="text" name="company3" id="company3" />
                        </div>
                        <div class="input">
                            <label>Responsibility</label>
                            <p class="dutyContainer3 error"><span class="dutyLimit3"></span> / 240</p>
                            <input type="text" name="duty3one" id="duty3one" onkeyup="dutyCount3()" />
                            <img class="add" src="img/plus.svg" height="25px" width="25px">
                        </div>
                        <div class="input two">
                            <label>Responsibility</label>
                            <p class="dutyContainer3 error"><span class="dutyLimit3"></span>/ 240</p>
                            <input type="text" name="duty3two" id="duty3two" onkeyup="dutyCount3()" />
                            <img class="remove" src="img/minus.svg" height="25px" width="25px">
                            <img class="add" src="img/plus.svg" height="25px" width="25px"></div>
                        <div class="input three last">
                            <label>Responsibility</label>
                            <p class="dutyContainer3 error"><span class="dutyLimit3"></span> / 240</p>
                            <input type="text" name="duty3three" id="duty3three" onkeyup="dutyCount3()" />
                            <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content">

                    <h2>List a Few Awards You've Won, Articles You've Published, or Get Creative!</h2>
                    
                </div>
                
            </div>

            <div class="color-two">
                
                <div class="content">

                    <div>
                        <label>Title This Section</label>
                        <input type="text" name="sub1Title" id="sub1Title" />
                    </div>
                    <div class="input">
                        <label>Add an Item</label>
                        <input type="text" name="sub1One" id="sub1One" />
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Add an Item</label>
                        <input type="text" name="sub1Two" id="sub1Two" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input three last">
                        <label>Add An Item</label>
                        <input type="text" name="sub1Three" id="sub1Three" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content">

                    <h2>Here's a Great Place to List Some Job-Specific Skills</h2>
                    
                </div>
                
            </div>

            <div class="color-three">
                
                <div class="content">

                    <div>
                        <label>Title This Section</label>
                        <input type="text" name="sub2Title" id="sub2Title" />
                    </div>
                    <div class="input">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2One" id="sub2One" />
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2Two" id="sub2Two" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2Three" id="sub2Three" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2Four" id="sub2Four" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input two">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2Five" id="sub2Five" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                        <img class="add" src="img/plus.svg" height="25px" width="25px">
                    </div>
                    <div class="input three last">
                        <label>Add a Skill</label>
                        <input type="text" name="sub2Six" id="sub2Six" />
                        <img class="remove" src="img/minus.svg" height="25px" width="25px">
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content">

                    <h2>Almost Done! Let's See Those References!</h2>
                    
                </div>
                
            </div>

            <div class="color-four">
                
                <div class="content">

                    <div>
                        <label>Title This Section</label>
                        <input type="text" name="sub3Title" id="sub3Title" value="References" />
                    </div>
                    <div>
                        <label>Reference Name</label>
                        <input type="text" name="sub3Name1" id="sub3Name1" />
                    </div>
                    <div>
                        <label>How to Contact</label>
                        <input type="text" name="sub3Contact1" id="sub3Contact1" />
                    </div>
                    <div class="last">
                        <label>Your Relationship</label>
                        <input type="text" name="sub3Relation1" id="sub3Relation1" />
                    </div>
                    
                </div>
                
            </div>

            <div class="color-none">
                
                <div class="content collapsed">

                    <div class="another last">
                        <h3>Do You Have Another Reference To List?</h3>
                        <button type="button" id="ref2Yes">Yes</button>
                        <button type="button" id="ref2No">No</button>
                    </div>
                    
                </div>
                
            </div>
            
            <div id="ref2">

                <div class="color-four">

                    <div class="content">

                        <div class="first">
                            <label>Reference Name</label>
                            <input type="text" name="sub3Name2" id="sub3Name2" />
                        </div>
                        <div>
                            <label>How to Contact</label>
                            <input type="text" name="sub3Contact2" id="sub3Contact2" />
                        </div>
                        <div class="last">
                            <label>Your Relationship</label>
                            <input type="text" name="sub3Relation2" id="sub3Relation2" />
                        </div>
                    </div>
                    
                </div>
                

                <div class="color-none">

                    <div class="content collapsed">

                        <div id="ref3Check" class="another last">
                            <h3>Do You Have Another Reference To List?</h3>
                            <button type="button" id="ref3Yes">Yes</button>
                            <button type="button" id="ref3No">No</button>
                        </div>

                    </div>

                </div>
                
            </div>
            
            <div id="ref3">

            <div class="color-four">
                
                <div class="content">

                        <div class="first">
                            <label>Reference Name</label>
                            <input type="text" name="sub3Name3" id="sub3Name3" />
                        </div>
                        <div>
                            <label>How to Contact</label>
                            <input type="text" name="sub3Contact3" id="sub3Contact3" />
                        </div>
                        <div class="last">
                            <label>Your Relationship</label>
                            <input type="text" name="sub3Relation3" id="sub3Relation3" />
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="color-one">
                
                <div class="content">

                    <div>
                        <label>Closing Section Title</label>
                        <input type="text" name="closerTitle" id="closerTitle" value="What I Bring to the Table" />
                    </div>
                    <div class="last">
                        <label>Closing Message</label>
                        <textarea name="closerText" id="closerText"></textarea>
                        <p id="closerContainer" class="error"><span id="closerLimit"></span> / 280</p>
                    </div>
                    
                </div>
                
            </div>

            <div class="color-two">
                
                <div class="content buttons">

                    <div class="last">
                        <input type="submit" name="publish" value="Download PDF" class="submit-button" />
                        <input type="submit" name="publish" value="Download Bundle" class="submit-button" />
                    </div>
                    
                </div>
                
            </div>

        </form>
        
        <link rel="stylesheet" type="text/css" href="css/style.min.css">
        <script src="js/scripts.min.js"></script>
        
    </body>
</html>