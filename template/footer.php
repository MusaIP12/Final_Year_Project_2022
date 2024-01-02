<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <style>


    .footers p{
        text-align: center;
        font-size: 30px;
        font-family: 'League Gothic', sans-serif;
        text-shadow: 5px 2px 8px black;
        color: white;
        padding-bottom: 20px;
    }
    footer{
        background-color: rgb(123, 222, 255);

    }

    footer ul{
        list-style: none;
        display: inline-block;
        color: black;
        text-align: center;
    }

    .social a{
        font-size: 24px;
        border: 1px solid white;
        width: 40px;
        height: 40px;
        line-height: 38px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        margin: 0 8px;
        opacity: 0.75;
    }

    .list{
        width: 90%;
        margin: auto;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #names{
        padding-bottom: 20px;
        font-size: small;
        font-style: italic;
    }

    @media(max-width: 800px){
        .footers p{
            font-size: 30px;
        }
    }
    </style>
</head>
<?php
echo '<section class="footers">
<footer>
    <div class="list">
        <p id="founder">Contact details of the creators</p>
        <ul>
            <li id="names"><b>Group 17 Work</b></li>
            <li>
                <div class="social">
                    <a href=""><i class="fa fa-github"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-envelope"></i></a>
                </div>
            </li>
        </ul>

    </div>
</footer>

</section>';
?>