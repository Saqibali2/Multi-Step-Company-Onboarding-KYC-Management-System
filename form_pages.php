<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function toggleButtons() {
            var checkboxYes = document.getElementById("checkbox-yes1");
            var checkboxNo = document.getElementById("checkbox-no1");
            var fields = document.getElementById("fields");
            var field = document.getElementById("field");
            var yestext = document.getElementById("yestext");
            var notext = document.getElementById("notext");
            if (checkboxYes.checked) {
                fields.style.display = "block";
                field.style.display = "block";
                yestext.style.display = "block"; 
                notext.style.display = "none";
                checkboxNo.checked = false; 
            } else if (checkboxNo.checked) {
                fields.style.display = "block"; 
                field.style.display = "block";
                yestext.style.display = "none"; 
                notext.style.display = "block";
                checkboxYes.checked = false; 
            } else {
                fields.style.display = "none"; 
                field.style.display = "block";
                yestext.style.display = "none"; 
                notext.style.display = "none";

            }
        }

        function toggleButtons2() {
            var checkboxYes = document.getElementById("checkbox-yes2");
            var checkboxNo = document.getElementById("checkbox-no2");
            var fields = document.getElementById("fields2");

            if (checkboxYes.checked) {
                fields.style.display = "block"; // Hide the "Click Here" button

                checkboxNo.checked = false; // Uncheck the "No" checkbox
            } else if (checkboxNo.checked) {
                fields.style.display = "none"; // Show the "Click Here" button

                checkboxYes.checked = false; // Uncheck the "Yes" checkbox
            } else {
                fields.style.display = "none"; // Hide the "Click Here" button

            }
        }
        function toggleform1d() {
            var Yes1 = document.getElementById("yes1");
            var No1 = document.getElementById("no1");
            var Yes3 = document.getElementById("yes3");
            var No3 = document.getElementById("no3");
            var Yes2 = document.getElementById("yes2");
            var No2 = document.getElementById("no2");
            var fields = document.getElementById("1d");
            var form = document.getElementById("from");

             if (Yes1.checked || Yes2.checked ||Yes3.checked) {
                 fields.style.display = "block"; 
                 form.style.display="block";
             } else 
            if (No1.checked && No3.checked && No2.checked) {
                fields.style.display = "none"; 
                form.style.display="none";
                

               
            }
             else {
             fields.style.display = "block"; 
             form.style.display="block";
                 
            }
        }



    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }

        .container .card {
            height: 1350px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
        }

        .container .card .form {
            width: 100%;
            height: 100%;

            display: flex;
        }

        .container .card .left-side {
            width: 35%;
            background-color: #304767;
            height: 100%;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 20px 30px;
            box-sizing: border-box;

        }

        /*left-side-start*/
        .left-heading {
            color: #fff;

        }

        .steps-content {
            margin-top: 30px;
            color: #fff;
        }

        .steps-content p {
            font-size: 12px;
            margin-top: 15px;
        }

        .progress-bar {
            list-style: none;
            /*color:#fff;*/
            margin-top: 30px;
            font-size: 13px;
            font-weight: 700;
            counter-reset: container 0;
        }

        .progress-bar li {
            position: relative;
            margin-left: 40px;
            margin-top: 50px;
            counter-increment: container 1;
            color: #4f6581;
        }

        .progress-bar li::before {
            content: counter(container);
            line-height: 25px;
            text-align: center;
            position: absolute;
            height: 25px;
            width: 25px;
            border: 1px solid #4f6581;
            border-radius: 50%;
            left: -40px;
            top: -5px;
            z-index: 10;
            background-color: #304767;


        }


        .progress-bar li::after {
            content: '';
            position: absolute;
            height: 90px;
            width: 2px;
            background-color: #4f6581;
            z-index: 1;
            left: -27px;
            top: -70px;
        }


        .progress-bar li.active::after {
            background-color: #fff;

        }

        .progress-bar li:first-child:after {
            display: none;
        }

        /*.progress-bar li:last-child:after{*/
        /*  display:none;  */
        /*}*/
        .progress-bar li.active::before {
            color: #fff;
            border: 1px solid #fff;
        }

        .progress-bar li.active {
            color: #fff;
        }

        .d-none {
            display: none;
        }






















        /*left-side-end*/
        .container .card .right-side {
            width: 65%;
            background-color: #fff;
            height: 100%;
            border-radius: 20px;
        }

        /*right-side-start*/
        .main {
            display: none;
        }

        .active {
            display: block;
        }

        .main {
            padding: 40px;
        }

        .main small {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2px;
            height: 30px;
            width: 30px;
            background-color: #ccc;
            border-radius: 50%;
            color: yellow;
            font-size: 19px;
        }

        .text {
            margin-top: 20px;
        }

        .congrats {
            text-align: center;
        }

        .text p {
            margin-top: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #cbced4;
        }

        .input-text {
            margin: 30px 0;
            display: flex;
            gap: 20px;
        }

        .input-text .input-div {
            width: 100%;
            position: relative;

        }



        input[type="text"] {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        input[type="text1"] {
            width: 100%;
            height: 140px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        input[type="text2"] {
            width: 100%;
            height: 70px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        select {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        .input-text .input-div span {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 14px;
            transition: all 0.5s;
        }

        .input-div input:focus~span,
        .input-div input:valid~span {
            top: -15px;
            left: 6px;
            font-size: 10px;
            font-weight: 600;
        }

        .input-div span {
            top: -15px;
            left: 6px;
            font-size: 10px;
        }

        .buttons button {
            height: 40px;
            width: 100px;
            border: none;
            border-radius: 5px;
            background-color: #0075ff;
            font-size: 12px;
            color: #fff;
            cursor: pointer;
        }

        .button_space {
            display: flex;
            gap: 20px;

        }

        .button_space button:nth-child(1) {
            background-color: #fff;
            color: #000;
            border: 1px solid#000;
        }

        .user_card {
            margin-top: 20px;
            margin-bottom: 40px;
            height: 200px;
            width: 100%;
            border: 1px solid #c7d3d9;
            border-radius: 10px;
            display: flex;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
        }

        .user_card span {
            height: 80px;
            width: 100%;
            background-color: #dfeeff;
        }

        .circle {
            position: absolute;
            top: 40px;
            left: 60px;
        }

        .circle span {
            height: 70px;
            width: 70px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            border-radius: 50%;
        }

        .circle span img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .social {
            display: flex;
            position: absolute;
            top: 100px;
            right: 10px;
        }

        .social span {
            height: 30px;
            width: 30px;
            border-radius: 7px;
            background-color: #fff;
            border: 1px solid #cbd6dc;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
            color: #cbd6dc;

        }

        .social span i {
            cursor: pointer;
        }

        .heart {
            color: red !important;
        }

        .share {
            color: red !important;
        }

        .user_name {
            position: absolute;
            top: 110px;
            margin: 10px;
            padding: 0 30px;
            display: flex;
            flex-direction: column;
            width: 100%;

        }

        .user_name h3 {
            color: #4c5b68;
        }

        .detail {
            /*margin-top:10px;*/
            display: flex;
            justify-content: space-between;
            margin-right: 50px;
        }

        .detail p {
            font-size: 12px;
            font-weight: 700;

        }

        .detail p a {
            text-decoration: none;
            color: blue;
        }






        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142;
            }
        }










        .warning {
            border: 1px solid red !important;
        }


        /*right-side-end*/
        @media (max-width:750px) {
            .container {
                height: scroll;


            }

            .container .card {
                max-width: 350px;
                height: auto !important;
                margin: 30px 0;
            }

            .container .card .right-side {
                width: 100%;

            }

            .input-text {
                display: block;
            }

            .input-text .input-div {
                margin-top: 20px;

            }

            .container .card .left-side {

                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>BACKGROUND INFORMATION </h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">1</span></h3>

                    </div>
                    <ul class="progress-bar">
                        <li class="active">COMPANY PARTICULARS </li>
                        <li>BENEFICIAL OWNER (BO) </li>
                        <li style="display: none;" id="fields">BENEFICIAL OWNER DECLARATION </li>
                        <li style="display: none;" id="fields">OCCUPATION / BUSINESS DETAILS</li>
                        <li style="display: none;" id="fields">POLITICALLY EXPOSED PERSON </li>
                        <li style="display: none;" id="fields">Declaration by Person Acting on Behalf of Client</li>
                        <li>BOARD OF DIRECTORS </li>
                        <li>PERSON HAVING EXECUTIVE AUTHORITY </li>
                        <li>PERSONS ACTING ON BEHALF OF COMPANY </li>
                        <li id="fields1">Details of PERSONS ACTING ON BEHALF OF CLIENT </li>
                        <li style="display: none;" id="fields1">POLITICALLY EXPOSED PERSON </li>
                        <li style="display: none;" id="fields1">ENTITY PARTICULARS </li>
                        <li  id="1d">POLITICALLY EXPOSED PERSON </li>
                        <li style="display: none;" id="1d">POLITICALLY EXPOSED PERSON </li>
                        <li>SCOPE OF SERVICES </li>
                        <li>BUSINESS DETAILS </li>
                        <li>ADDITIONAL INFORMATION</li>
                        <li>ENHANCED CUSTOMER DUE DILIGENCE</li>
                    </ul>



                </div>
               <!-- A -->
               <div class="right-side">
                <div class="main active">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>COMPANY PARTICULARS</h2>
                    </div>
                    <form action="" method="POST"> <!-- Make sure to set the correct action attribute -->
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="fl_name" required>
                                <span>Full legal name</span>
                            </div>
                            <div class="input-div"> 
                                <input type="text" name="f_name" required>
                                <span>Former names (if any):</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="t_name" required>
                                <span>Trading names (if any):</span>
                            </div>
                        </div> 
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="r_num" required>
                                <span>Incorporation / registration number</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="country" required>
                                <span>Country of incorporation / registration</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="date" required>
                                <span>Date of incorporation / registration</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="r_address" required>
                                <span>Registered address</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_address" required>
                                <span>Address of business (if different from registered address)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="t_num" required>
                                <span>Telephone number</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="email" required>
                                <span>Email address</span>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button" >Next Step</button>
                        </div>
                  
                </div>
               
        
       
                    <!-- B -->

                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>BENEFICIAL OWNER (BO) </h2>

                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>Does the company have any BO?</p>

                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio"  value="yes" name="BO" id="checkbox-yes1" onchange="toggleButtons()"
                                    required /> Yes
                                <input type="radio" value="no" name="BO" id="checkbox-no1" onchange="toggleButtons()" required />
                                No
                            </div>

                        </div>
                        <div style="display: none;" id="yestext">
                            <div class="input-text">
                                <div class="input-div">

                                    <p>please list the full names and aliases, if any, of all the BOs.</p>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="notext">
                            <div class="input-text">
                                <div class="input-div">

                                    <p>please list the full names and aliases, if any, of all persons having executive
                                        authority in the company.</p>
                                </div>
                            </div>
                        </div>

                        <div style="display: none;" id="field">
                            <div class="input-text">
                                <div class="input-div">
                                    <p>1</p>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="fname" required require>
                                    <span>Full name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" name="state" required>
                                    <span>State aliases (if any):</span>
                                </div>
                            </div>


                            <div class="input-text">
                                <div class="input-div">
                                    <p>2(If any)</p>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="fname2" required>
                                    <span>Full name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" name="state2"required>
                                    <span>State aliases (if any):</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <p>3(if any)</p>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="fname3" required>
                                    <span>Full name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" name="state3"required>
                                    <span>State aliases (if any):</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <p>4(if any)</p>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="fname4" required>
                                    <span>Full name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" name="state4" required>
                                    <span>State aliases (if any):</span>
                                </div>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
                    </div>
 
                    <!-- 1B A -->

                    <div class="main ">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>BENEFICIAL OWNER DECLARATION </h2>
                            <p>PERSONAL PARTICULARS </p>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="flname" required require id="user_name">
                                <span>Full legal name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="aliases" required>
                                <span>Aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="idcard_passport" required require>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="nationality" required require>
                                <span>Nationality
                                    (please indicate all nationalities):
                                </span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dob"  required require>
                                <span>Date of birth</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="res_address"  required require>
                                <span>Residential address</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="tel_num" required require>
                                <span>Telephone number</span>
                            </div>

                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="e_address" required require>
                                <span>Email address</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text2" name="reason" required require>
                                <span>State reason for being a BO (e.g. own 30% of shares of the company):</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
                    </div>

                    <!-- 1B B -->
                      
                         
                  <div class="main">
      <small><i class="fa fa-smile-o"></i></small>
      <div class="text">
        <h2>BENEFICIAL OWNER DECLARATION</h2>
        <p>OCCUPATION / BUSINESS DETAILS</p>
      </div>

      <div class="input-text">
        <div class="input-div">
          <input type="text" name="occupation" required>
          <span>What is the individual’s occupation?</span>
        </div>
      </div>

      <div class="input-text">
        <div class="input-div">
          <input type="text2" name="business_detail" required>
          <span>If the individual is a business owner, please provide details of the industry and business (e.g. products / services).</span>
        </div>
      </div>

      <div class="input-text">
        <div class="input-div">
          <input type="text2" name="dealing_country" required>
          <span>In the individual’s occupation / business, which are the primary countries in which the individual has dealings with?</span>
        </div>
      </div>

      <div class="input-text">
        <div class="input-div">
          <input type="text2" name="business_detail2" required>
          <span>If the individual is a business owner, please provide details of the industry and business (e.g. products / services).</span>
        </div>
      </div>

      <div class="input-text" >
        <div class="input-div">
          <p>In the individual’s occupation / business, does the individual deal with any individual or entity from the following countries:<br>
            - Democratic People’s Republic of Korea<br>
            - Democratic Republic of the Congo<br>
            - Eritrea<br>
            - Iran<br>
            - Libya<br>
            - Somalia<br>
            - South Sudan<br>
            - Sudan<br>
            - Yemen<br>
          </p>
        </div>
      </div>

      <div class="input-text">
        <div class="input-div">
          <input type="radio" name="yes_no" value="Yes" onchange="toggleButtons2()" checked /> Yes
          <input type="radio" name="yes_no" onchange="toggleButtons2()" value="No" /> No
        </div>
      </div>

      <div class="input-text" id="fields2" style="display: none;">
        <div class="input-div">
          <input type="text" name="specific_country">
          <span>Please indicate the specific countries and the nature of those dealings.</span>
        </div>
      </div>


                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
    
                    </div>

   <!-- 1B C -->
                    
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>BENEFICIAL OWNER DECLARATION </h2>
                            <p>POLITICALLY EXPOSED PERSON</p>

                        </div>



                        <div class="input-text">
                            <div class="input-div">

                                <p>Is the individual a current or former Politically Exposed Person (PEP)?

                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                 <input type="radio" name="PEP" value="Yes" checked /> Yes
                                <input type="radio" name="PEP" value="No" /> No
                               
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <p>Is the individual a “family member” of a current or former PEP?
                                    <br>
                                    “Family member” means a parent, step-parent, child, step-child, adopted child,
                                    spouse, sibling, step-sibling and adopted sibling.


                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">   
                                
                                <input type="radio" name="form_curr_PEP" value="Yes" checked /> Yes
                                <input type="radio" name="form_curr_PEP" value="No" /> No
                                
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <p>Is the individual a “close associate” of a current or former PEP?
                                    <br>
                                    “Close associate” means a person who is closely connected to a PEP, either socially
                                    or professionally. Examples include partners outside the family unit (e.g.
                                    girlfriends, boyfriends, mistresses); prominent members of the same political party,
                                    civil organisation, labour union as the PEP; business partners or associates,
                                    especially those that share ownership of legal entities with the PEP, or who are
                                    otherwise connected (e.g. through joint membership of a company board). In the case
                                    of personal relationships, the social, economic and cultural context may also play a
                                    role in determining how close those relationships generally are.


                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                               
                                <input type="radio" name="close_of_PEP" value="Yes" checked /> Yes
                                <input type="radio" name="close_of_PEP" value="No" /> No
                                
                            </div>

                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
    
                    </div>
   
                 <!-- 1B sign -->
                    <!-- new thissss-->
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>BENEFICIAL OWNER DECLARATION </h2>
                            <h4>Declaration by Person Acting on Behalf of Client</h4>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                            <p>I declare that the information provided in this form is true and correct. I am aware that I may be subject to prosecution and criminal sanctions under written law if I am found to have made any false statement which I know to be false or which I do not believe to be true, or if I have intentionally suppressed any material fact. 

                            </p>
                        </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="signature" required require id="user_name">
                                <span>Signature</span>
                            </div>
                           
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_name" required require id="user_name">
                                <span>Name of person acting on behalf of client</span>
                            </div>
                            
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_position" required require>
                                <span>Position in or relationship with the client</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_date" required require id="user_name">
                                <span>Date</span>
                            </div>
                           
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>

                    </div>
                     <!--C -->
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>BOARD OF DIRECTORS </h2>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <p>1</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="fullname" required require id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="s_aliases" required require>
                                <span>State aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="i_p_num"required require>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>2(if any)</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"    name="fullname2"required id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="s_aliases2" required>
                                <span>State aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="i_p_num2" required>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>3(if any)</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"   name="fullname3" required id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="s_aliases3" required>
                                <span>State aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="i_p_num3" required>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>


                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button"  >Next Step</button>
                        </div>
    
                    </div>


                    <!-- D -->

                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>PERSON HAVING EXECUTIVE AUTHORITY</h2>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="full_name" required require id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="st_aliases" required>
                                <span>State aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="id_p_num"required require>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="position"required require>
                                <span>Position in / relationship with company:</span>
                            </div>
                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <!-- E -->
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>PERSONS ACTING ON BEHALF OF COMPANY </h2>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <p>1</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="act_fname" required require id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="act_relation" required require>
                                <span>Relationship</span>
                            </div>
                        </div>


                        <div class="input-text">
                            <div class="input-div">
                                <p>2(if any)</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="act_fname2"required id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="act_relation2" required>
                                <span>Relationship</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>3(if any)</p>

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="act_fname3" required id="user_name">
                                <span>Full name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="act_relation3" required>
                                <span>Relationship</span>
                            </div>
                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
    
                    </div>

                    <!-- 1C a -->


                    <div class="main ">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>PERSONS ACTING ON BEHALF OF CLIENT </h2>
                            <p>PERSONAL PARTICULARS </p>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_fname" required require id="user_name">
                                <span>Full legal name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" name="b_client_aliases" required>
                                <span>Aliases (if any)</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_id" required require>
                                <span>Identity card or passport number</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_nationality" required require>
                                <span>Nationality
                                    (please indicate all nationalities):
                                </span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_dob" required require>
                                <span>Date of birth</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_raddress" required require>
                                <span>Residential address</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_tnum" required require>
                                <span>Telephone number</span>
                            </div>

                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="b_client_eaddress" required require>
                                <span>Email address</span>
                            </div>
                        </div>


                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
    
                    </div>

                    <!-- 1C B -->
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>PERSONS ACTING ON BEHALF OF CLIENT</h2>
                            <p>POLITICALLY EXPOSED PERSON</p>

                        </div>



                        <div class="input-text">
                            <div class="input-div">

                                <p>Are you a current or former Politically Exposed Person (PEP)?

                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio"  name="PEP_answer" value="yes" required onchange="toggleform1d()" id="yes2 "/> Yes
                                <input type="radio"  name="PEP_answer" value="no" required onchange="toggleform1d()" id="no1"/> No
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <p>Is the individual a “family member” of a current or former PEP?
                                    <br>
                                    “Family member” means a parent, step-parent, child, step-child, adopted child,
                                    spouse, sibling, step-sibling and adopted sibling.


                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio"  name="f_member_PEP" value="yes" required onchange="toggleform1d()" id="yes2" /> Yes
                                <input type="radio"  name="f_member_PEP" value="no" required onchange="toggleform1d()" id="no2" /> No
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <p>Is the individual a “close associate” of a current or former PEP?
                                    <br>
                                    “Close associate” means a person who is closely connected to a PEP, either socially
                                    or professionally. Examples include partners outside the family unit (e.g.
                                    girlfriends, boyfriends, mistresses); prominent members of the same political party,
                                    civil organisation, labour union as the PEP; business partners or associates,
                                    especially those that share ownership of legal entities with the PEP, or who are
                                    otherwise connected (e.g. through joint membership of a company board). In the case
                                    of personal relationships, the social, economic and cultural context may also play a
                                    role in determining how close those relationships generally are.


                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio"  name="c_associate_PEP" value="yes" required onchange="toggleform1d()" id="yes3"/> Yes
                                <input type="radio"  name="c_associate_PEP" id="no3" value="no" require onchange="toggleform1d()" /> No
                            </div>

                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>
    
                    </div>

                    <!-- 1C C -->
                    
                        <div class="main ">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>PERSONS ACTING ON BEHALF OF CLIENT</h2>
                                <p>ENTITY PARTICULARS </p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_fname" required require id="user_name">
                                    <span>Full legal name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" name="cp_frname" required>
                                    <span>Former names (if any):</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_tname" required>
                                    <span>Trading names (if any):</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_rnum" required require>
                                    <span>Incorporation / registration number</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_country" required require>
                                    <span>Country of incorporation / registration
                                    </span>
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_date_of_reg" required require>
                                    <span>Date of incorporation / registration</span>
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_raddress" required require>
                                    <span>Registered address</span>
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_baddress" required>
                                    <span>Address of business (if different from registered address)</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_tnum" required require>
                                    <span>Telephone number</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" name="cp_eaddress"required require>
                                    <span>Email address</span>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>
                        <!-- 1D A --> 
                        <!-- new -->
                         
                    <div class="main" >
                        <small><i class="fa fa-smile-o"></i></small>
                        <div id="form"  >
                        <div class="text">
                            <h2>CATEGORIES OF PEP, FAMILY MEMBER OF PEP AND CLOSE ASSOCIATE OF PEP   & DETAILS OF PEP</h2>

                        </div>

                         <div class="input-text">
                            <div class="input-div">

                                <h2>I am a:

                                </h2>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <h4>PEP

                                </h4>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio" name="pep_ctg"  value="Singapore PEP" required /> Singapore PEP<br>
                                <input type="radio" name="pep_ctg" value="Foreign PEP" required /> Foreign PEP<br>
                                <input type="radio" name="pep_ctg"  value="International Organisation  PEP" required /> International Organisation  PEP
                                
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <h4>Family member of PEP 
                                </h4>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="radio"   name="pep_family" value="Parent / Step-parent" required /> Parent / Step-parent<br>
                                <input type="radio"   name="pep_family" value="Spouse" required /> Spouse<br>
                                <input type="radio"   name="pep_family" value="Child / Adopted child / Step-child" required /> Child / Adopted child / Step-child<br>
                                <input type="radio"   name="pep_family" value="Sibling / Adopted sibling / Step-sibling" required /> Sibling / Adopted sibling / Step-sibling<br>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div long-text-input">
                                <input type="text2"  required>
                                <span>Close associate of PEP (please describe relationship with the PEP):</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"  name="pep_close_name" required require>
                                <span>Name of PEP:</span>
                            </div></div>
                            <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="pep_close_country" required require>
                                <span>Country / International organisation :</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text1" name="pep_assoc_name" required require>
                                <span>Name (and description of responsibilities if not self-explanatory from the name) of the prominent public function that the PEP is currently or formerly entrusted with :</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <p>Period of service: (Write the Correct Date)

                                </p>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="period_from" required>
                                <span>From</span>
                            </div>
                            <div class="input-div"> 
                                <input type="text" name="period_to" required>
                                <span>to</span>
                            </div>
                        </div>
                    </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>

                    </div>
                    <!-- 1d SIgn -->
                       <!-- new -->
                       <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>POLITICALLY EXPOSED PERSON </h2>
                            <h4>Declaration by Person Acting on Behalf of Client</h4>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                            <p>I declare that the information provided in this form is true and correct. I am aware that I may be subject to prosecution and criminal sanctions under written law if I am found to have made any false statement which I know to be false or which I do not believe to be true, or if I have intentionally suppressed any material fact. 

                            </p>
                        </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_signature" required require id="user_name">
                                <span>Signature</span>
                            </div>
                           
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_name1" required require id="user_name">
                                <span>Name of person acting on behalf of client</span>
                            </div>
                            
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_pos" required require>
                                <span>Position in or relationship with the client</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="dec_date1" required require id="user_name">
                                <span>Date</span>
                            </div>
                           
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" >Next Step</button>
                        </div>

                    </div>
                        <!-- F -->
                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>SCOPE OF SERVICES </h2>

                            </div>
                            <div class="input-text">
                                <div class="input-div long-text-input">
                                    <input type="text1" name="scope" required>
                                    <span>Details of scope of services (if not set out in a letter of engagement)</span>
                                </div>

                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button" >Next Step</button>
                            </div>
    
                        </div>
                        <!-- G -->
                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>BUSINESS DETAILS</h2>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text2" name="det_of_industry" required>
                                    <span>Please provide details of the industry and business (e.g. products /
                                        services).

                                    </span>
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text2" name="det_of_country" required>
                                    <span>Which are the primary countries in which the company has dealings with?
                                    </span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">

                                    <p>Does the company deal with any individual or entity from the following
                                        countries:<br>
                                        - Democratic People’s Republic of Korea<br>
                                        - Democratic Republic of the Congo<br>
                                        - Eritrea<br>
                                        - Iran<br>
                                        - Libya<br>
                                        - Somalia<br>
                                        - South Sudan<br>
                                        - Sudan<br>
                                        - Yemen<br>

                                    </p>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="radio" name="ind_country" value="Yes" checked /> Yes
                                    <input type="radio" name="ind_country" value="No" /> No
                                </div>

                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>

                        <!-- H -->

                        <div class="main">
    
        <small><i class="fa fa-smile-o"></i></small>
        <div class="text">
            <h2>ADDITIONAL INFORMATION</h2>
        </div>
        <div class="input-text">
            <div class="input-div long-text-input">
                <input type="text" name="other_info" required>
                <span>Any other information requested by the professional firm as necessary</span>
            </div>
        </div>
        <div class="buttons button_space">
        <button class="back_button">Back</button>
        <button class="next_button" >Next Step</button>
    </div>
    
</div>
<!-- 1a sign -->
   <!-- new -->
   <div class="main">
    <small><i class="fa fa-smile-o"></i></small>
    <div class="text">
        <h2>BACKGROUND INFORMATION OF THE COMPANY </h2>
        <h4>Declaration by Person Acting on Behalf of Client</h4>

    </div>
    <div class="input-text">
        <div class="input-div">
        <p>I declare that the information provided in this form is true and correct. I am aware that I may be subject to prosecution and criminal sanctions under written law if I am found to have made any false statement which I know to be false or which I do not believe to be true, or if I have intentionally suppressed any material fact. 

        </p>
    </div>
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" name="final_sign" required require id="user_name">
            <span>Signature</span>
        </div>
       
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" name="final_name" required require id="user_name">
            <span>Name of person acting on behalf of client</span>
        </div>
        
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" name="final_position" required require>
            <span>Position in or relationship with the client</span>
        </div>
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" name="final_date" required require id="user_name">
            <span>Date</span>
        </div>
       
    </div>

    
    <div class="buttons button_space">
        <button class="back_button">Back</button>
        <button class="next_button" >Next Step</button>
    </div>
    
</div>

<div class="main">
                       
                       <div class="text">
                        <h2>ENHANCED CUSTOMER DUE DILIGENCE</h2>
                           <p>Current estimated wealth </p>

                       </div>
                       <div class="input-text">
                           <div class="input-div">
                              <p>Sources of wealth (how you acquired the wealth) :
<br>
                               Indicate each source of wealth (including past sources) which contributed to your wealth (e.g. occupation, investments, inheritance, borrowings, etc); and estimated amounts generated from each source.
                               </p>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                              <h4>1</h4>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="source" required require>
                               <span>S$ </span>
                           </div>
                           <div class="input-div">

                               <span>of which S$ 
                                   </span>
                           </div>
                           <div class="input-div">
                               <input type="text" name="source_of_wealth" required require>
                               <span>S$ </span>
                           </div>
                           <div class="input-div">
                               <span>or </span>
                           </div>
                           
                       </div>
                      
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="percent" required require>
                               <span>%</span>
                           </div>
                           <div class="input-div">

                               <span> is PEP-related
                                   </span>
                           </div>
                       </div>
                     
                       <div class="input-text">
                           <div class="input-div">
                              <h4>2</h4>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="source2" required >
                               <span>S$ </span>
                           </div>
                           <div class="input-div">

                               <span>of which S$ 
                                   </span>
                           </div>
                           <div class="input-div">
                               <input type="text" name="source2_of_wealth" required >
                               <span>S$ </span>
                           </div>
                           <div class="input-div">
                               <span>or </span>
                           </div>
                           
                       </div>
                      
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="percent2" required >
                               <span>%</span>
                           </div>
                           <div class="input-div">

                               <span> is PEP-related
                                   </span>
                           </div>
                       </div>
                     


                       <div class="input-text">
                           <div class="input-div">
                              <h4>3</h4>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="source3" required >
                               <span>S$ </span>
                           </div>
                           <div class="input-div">

                               <span>of which S$ 
                                   </span>
                           </div>
                           <div class="input-div">
                               <input type="text" name="source3_of_wealth" required >
                               <span>S$ </span>
                           </div>
                           <div class="input-div">
                               <span>or </span>
                           </div>
                           
                       </div>
                      
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="percent3" required >
                               <span>%</span>
                           </div>
                           <div class="input-div">

                               <span> is PEP-related
                                   </span>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                              <h4>4</h4>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="source4"required>
                               <span>S$ </span>
                           </div>
                           <div class="input-div">

                               <span>of which S$ 
                                   </span>
                           </div>
                           <div class="input-div">
                               <input type="text" name="source4_of_wealth"required >
                               <span>S$ </span>
                           </div>
                           <div class="input-div">
                               <span>or </span>
                           </div>
                           
                       </div>
                      
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="percent4" required >
                               <span>%</span>
                           </div>
                           <div class="input-div">

                               <span> is PEP-related
                                   </span>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text" name="source_of_fund" required require>
                               <span>Source of funds : <span>
                           </div>
                       </div>
                       <div class="input-text">
                           <div class="input-div">
                               <input type="text2" name="any_other" required require>
                               <span>Any other information requested by the professional firm as necessary: <span>
                           </div>
                       </div>

                       <div class="buttons button_space">
            <button class="back_button">Back</button>
            <button class="submit_button" name ="submit" type="submit">Submit</button>
        </div>
        </form>
</div>

<!---->
<div class="main">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
    </svg>
    <div class="text congrats">
        <h2>Congratulations!</h2>
        <p>Thanks Mr./Mrs. <span class="shown_name"></span>, your information has been submitted successfully. For future reference, we will contact you soon.</p>
    </div>
</div>

<!--remmember-->


<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "html_pages";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from form inputs
    $fl_name = $_POST['fl_name'];
    $f_name = $_POST['f_name'];
    $t_name = $_POST['t_name'];
    $r_num = $_POST['r_num'];
    $country = $_POST['country'];
    $date = $_POST['date'];
    $r_address = $_POST['r_address'];
    $b_address = $_POST['b_address'];
    $t_num = $_POST['t_num'];
    $email = $_POST['email'];
    $BO = $_POST['BO'];
    $fname = $_POST['fname'];
    $state = $_POST['state'];
    $fname2 = $_POST['fname2'];
    $state2 = $_POST['state2'];
    $fname3 = $_POST['fname3'];
    $state3 = $_POST['state3'];
    $fname4 = $_POST['fname4'];
    $state4 = $_POST['state4'];

    $flname = $_POST['flname'];
    $aliases = $_POST['aliases'];
    $idcard_passport = $_POST['idcard_passport'];
    $nationality = $_POST['nationality'];
    $dob = $_POST['dob'];
    $res_address = $_POST['res_address'];
    $tel_num = $_POST['tel_num'];
    $e_address = $_POST['e_address'];
    $reason = $_POST['reason'];

    
    $occupation = $_POST['occupation'];
    $business_detail = $_POST['business_detail'];
    $dealing_country = $_POST['dealing_country'];
    $business_detail2 = $_POST['business_detail2'];
    $yes_no = $_POST['yes_no'];
    $specific_country = $_POST['specific_country'];

    $PEP = $_POST['PEP'];
    $form_curr_PEP = $_POST['form_curr_PEP'];
    $close_of_PEP = $_POST['close_of_PEP'];
    $signature = $_POST['signature'];
    $dec_name = $_POST['dec_name'];
    $dec_position = $_POST['dec_position'];
    $dec_date = $_POST['dec_date'];
    $fullname = $_POST['fullname'];
    $s_aliases = $_POST['s_aliases'];
    $i_p_num = $_POST['i_p_num'];
    $fullname2 = $_POST['fullname2'];
    $s_aliases2 = $_POST['s_aliases2'];
    $i_p_num2 = $_POST['i_p_num2'];
    $fullname3 = $_POST['fullname3'];
    $s_aliases3 = $_POST['s_aliases3'];
    $i_p_num3 = $_POST['i_p_num3'];
    $full_name = $_POST['full_name'];
    $st_aliases = $_POST['st_aliases'];
    $id_p_num = $_POST['id_p_num'];
    $position = $_POST['position'];
    $act_fname = $_POST['reason'];
    $act_relation = $_POST['act_relation2'];
    $act_fname2 = $_POST['act_fname2'];
    $act_relation2 = $_POST['act_relation2'];
    $act_fname3 = $_POST['act_fname3'];
    $act_relation3 = $_POST['act_relation3'];
    $b_client_fname = $_POST['b_client_fname'];
    $b_client_aliases = $_POST['b_client_aliases'];
    $b_client_id = $_POST['b_client_id'];
    $b_client_nationality = $_POST['b_client_nationality'];
    $b_client_dob = $_POST['b_client_dob'];
    $b_client_raddress = $_POST['b_client_raddress'];
    $b_client_tnum = $_POST['b_client_tnum'];
    $b_client_eaddress = $_POST['b_client_eaddress'];
    $PEP_answer = $_POST['PEP_answer'];
    $f_member_PEP = $_POST['f_member_PEP'];
    $c_associate_PEP = $_POST['c_associate_PEP'];
    $cp_fname = $_POST['cp_fname'];
    $cp_frname = $_POST['cp_frname'];
    $cp_tname = $_POST['cp_tname'];
    $cp_rnum = $_POST['cp_rnum'];
    $cp_country = $_POST['cp_country'];
    $cp_date_of_reg = $_POST['cp_date_of_reg'];
    $cp_raddress = $_POST['cp_raddress'];
    $cp_baddress = $_POST['cp_baddress'];
    $cp_tnum = $_POST['cp_tnum'];
    $cp_eaddress = $_POST['cp_eaddress'];
    
    $pep_ctg = $_POST['pep_ctg'];
    $pep_family = $_POST['pep_family'];
    $pep_close_name = $_POST['pep_close_name'];
    $pep_close_country = $_POST['pep_close_country'];
    $pep_assoc_name = $_POST['pep_assoc_name'];
    $period_from = $_POST['period_from'];
    $period_to = $_POST['period_to'];
    $dec_signature = $_POST['dec_signature'];
    $dec_name1 = $_POST['dec_name1'];
    $dec_pos = $_POST['dec_pos'];
    $dec_date1 = $_POST['dec_date1'];
    
    $scope = $_POST['scope'];
    $det_of_industry = $_POST['det_of_industry'];
    $det_of_country = $_POST['det_of_country'];
    $ind_country = $_POST['ind_country'];
    $other_info = $_POST['other_info'];
    $final_sign = $_POST['final_sign'];
    $final_name = $_POST['final_name'];
    $final_position = $_POST['final_position'];
    $final_date = $_POST['final_date'];
    
$source = $_POST['source'];
$source_of_wealth = $_POST['source_of_wealth'];
$percent = $_POST['percent'];
$source2 = $_POST['source2'];
$source2_of_wealth = $_POST['source2_of_wealth'];
$percent2 = $_POST['percent2'];
$source3 = $_POST['source3'];
$source3_of_wealth = $_POST['source3_of_wealth'];
$percent3 = $_POST['percent3'];
$source4 = $_POST['source4'];
$source4_of_wealth = $_POST['source4_of_wealth'];
$percent4 = $_POST['percent4'];
$source_of_fund = $_POST['source_of_fund'];
$any_other = $_POST['any_other'];

// Prepare and execute SQL query to insert data into the table
$sql = "INSERT INTO company_particulars (fl_name, f_name, t_name, r_num, country, date, r_address, b_address, t_num, email, BO, fname, state, fname2, state2, fname3, state3, fname4, state4, flname, aliases, idcard_passport, nationality, dob, res_address, tel_num, e_address, reason, occupation, bussiness_detail, dealing_country2, bussiness_detail2, yes_no, specific_country, PEP, form_curr_PEP, close_of_PEP, signature, dec_name, dec_position, dec_date, fullname, s_aliases, i_p_num, fullname2, s_aliases2, i_p_num2, fullname3, s_aliases3, i_p_num3, full_name, st_aliases, id_p_num, position, act_fname, act_relation, act_fname2, act_relation2, act_fname3, act_relation3, b_client_fname, b_client_aliases, b_client_id, b_client_nationality, b_client_dob, b_client_raddress, b_client_tnum, b_client_eaddress, PEP_answer, f_member_PEP, c_associate_PEP, cp_fname, cp_frname, cp_tname, cp_rnum, cp_country, cp_date_of_reg, cp_raddress, cp_baddress, cp_tnum, cp_eaddress, pep_ctg, pep_family, pep_close_name, pep_close_country, pep_assoc_name, period_from, period_to, dec_signature, dec_name1, dec_pos, dec_date1, scope, det_of_industry, det_of_country, ind_country, other_info, final_sign, final_name, final_position, final_date, source, source_of_wealth, percent, source2, source2_of_wealth, percent2, source3, source3_of_wealth, percent3, source4, source4_of_wealth, percent4, source_of_fund, any_other)
VALUES ('$fl_name', '$f_name', '$t_name', '$r_num', '$country', '$date', '$r_address', '$b_address', '$t_num', '$email', '$BO', '$fname', '$state', '$fname2', '$state2', '$fname3', '$state3', '$fname4', '$state4', '$flname', '$aliases', '$idcard_passport', '$nationality', '$dob', '$res_address', '$tel_num', '$e_address', '$reason', '$occupation', '$business_detail', '$dealing_country', '$business_detail2', '$yes_no', '$specific_country', '$PEP', '$form_curr_PEP', '$close_of_PEP', '$signature', '$dec_name', '$dec_position', '$dec_date', '$fullname', '$s_aliases', '$i_p_num', '$fullname2', '$s_aliases2', '$i_p_num2', '$fullname3', '$s_aliases3', '$i_p_num3', '$full_name', '$st_aliases', '$id_p_num', '$position', '$act_fname', '$act_relation', '$act_fname2', '$act_relation2', '$act_fname3', '$act_relation3', '$b_client_fname', '$b_client_aliases', '$b_client_id', '$b_client_nationality', '$b_client_dob', '$b_client_raddress', '$b_client_tnum', '$b_client_eaddress', '$PEP_answer', '$f_member_PEP', '$c_associate_PEP', '$cp_fname', '$cp_frname', '$cp_tname', '$cp_rnum', '$cp_country', '$cp_date_of_reg', '$cp_raddress', '$cp_baddress', '$cp_tnum', '$cp_eaddress', '$pep_ctg', '$pep_family', '$pep_close_name', '$pep_close_country', '$pep_assoc_name', '$period_from', '$period_to', '$dec_signature', '$dec_name1', '$dec_pos', '$dec_date1', '$scope', '$det_of_industry', '$det_of_country', '$ind_country', '$other_info', '$final_sign', '$final_name', '$final_position', '$final_date', '$source', '$source_of_wealth', '$percent', '$source2', '$source2_of_wealth', '$percent2', '$source3', '$source3_of_wealth', '$percent3', '$source4', '$source4_of_wealth', '$percent4', '$source_of_fund', '$any_other')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} 
else {
echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
}
?>
                    





                        <Script>
                            var next_click = document.querySelectorAll(".next_button");
                            var main_form = document.querySelectorAll(".main");
                            var step_list = document.querySelectorAll(".progress-bar li");
                            var num = document.querySelector(".step-number");
                            let formnumber = 0;

                            next_click.forEach(function (next_click_form) {
                                next_click_form.addEventListener('click', function () {
                                    if (!validateform()) {
                                        return false
                                    }
                                    formnumber++;
                                    updateform();
                                    progress_forward();
                                    contentchange();
                                });
                            });

                            var back_click = document.querySelectorAll(".back_button");
                            back_click.forEach(function (back_click_form) {
                                back_click_form.addEventListener('click', function () {
                                    formnumber--;
                                    updateform();
                                    progress_backward();
                                    contentchange();
                                });
                            });

                            var username = document.querySelector("#user_name");
                            var shownname = document.querySelector(".shown_name");


                            var submit_click = document.querySelectorAll(".submit_button");
                            submit_click.forEach(function (submit_click_form) {
                                submit_click_form.addEventListener('click', function () {
                                    shownname.innerHTML = username.value;
                                    formnumber++;
                                    updateform();
                                });
                            });

                            var heart = document.querySelector(".fa-heart");
                            heart.addEventListener('click', function () {
                                heart.classList.toggle('heart');
                            });


                            var share = document.querySelector(".fa-share-alt");
                            share.addEventListener('click', function () {
                                share.classList.toggle('share');
                            });



                            function updateform() {
                                main_form.forEach(function (mainform_number) {
                                    mainform_number.classList.remove('active');
                                })
                                main_form[formnumber].classList.add('active');
                            }

                            function progress_forward() {
                                // step_list.forEach(list => {

                                //     list.classList.remove('active');

                                // }); 


                                num.innerHTML = formnumber + 1;
                                step_list[formnumber].classList.add('active');
                            }

                            function progress_backward() {
                                var form_num = formnumber + 1;
                                step_list[form_num].classList.remove('active');
                                num.innerHTML = form_num;
                            }

                            var step_num_content = document.querySelectorAll(".step-number-content");

                            function contentchange() {
                                step_num_content.forEach(function (content) {
                                    content.classList.remove('active');
                                    content.classList.add('d-none');
                                });
                                step_num_content[formnumber].classList.add('active');
                            }


                            function validateform() {
                                validate = true;
                                var validate_inputs = document.querySelectorAll(".main.active input");
                                validate_inputs.forEach(function (vaildate_input) {
                                    vaildate_input.classList.remove('warning');
                                    if (vaildate_input.hasAttribute('require')) {
                                        if (vaildate_input.value.length == 0) {
                                            validate = false;
                                            vaildate_input.classList.add('warning');
                                        }
                                    }
                                });
                                return validate;

                            }
                        </Script>



                    </div>
                </div>
            </div>
        </div>
</body>

</html>