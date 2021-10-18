<?php
include 'phpmailer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Send Email</title>

    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=email]{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=number]{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: right;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>

</head>
<body>
<div class="main">
    <div class="container">

        <form method="post" action="http://localhost/fpmumoe2.0/index.php?page=email" target="_blank">
            <div class="row">
                <div class="col-25">
                    <label for="name">Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Type Your Name" Required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email:</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Type Your Email" Required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="subject" name="subject" placeholder="Type the Subject of Your Email" Required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="message">Description:</label>
                </div>
                <div class="col-75">
                        <textarea type="text" id="message" name="message" placeholder="Type Your Message"
                                  style="height: 200px" Required></textarea>
                </div>
            </div>

            <div class="row">
                <button type="submit" name="sendEmail">Send</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>