<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav-left"><img src="asset/logo.png" alt="logo"></div>
        <div class="nav-right">
            <ul>
                <li><a href="#" data-page="#">Home</a></li>
                <li><a href="#" data-page="#">Concert</a></li>
                <li><a href="#" data-page="#">Seat</a></li>
                <li><a href="#" data-page="#">Ticket</a></li>
                <li><a href="#" data-page="#">Merch</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php include 'pages/home.php'; ?>
        <div class="content">
            <?php include 'pages/concert.php'; ?>
            <?php include 'pages/seat.php'; ?>
            <?php include 'pages/ticket.php'; ?>
            <?php include 'pages/merch.php'; ?>
            <?php include 'pages/galery.php'; ?>
        </div>
    </div>
    <div class="footer">
        <div class="footer">
            <div class="footer-top">
                <div class="de-grandeur">
                    <div class="de-grandeur-title">De Grandeur</div>
                </div>
                <div class="contact">
                    <div class="contact-title">Contact</div>
                    <div class="contact-description">
                        Reach out to us for inquiries or support. <br><br>
                        +123 456 6789 <br><br>
                        info@example.com <br><br>
                        123 Street City <br><br>
                        Cityville ST 12345, <br><br>
                        Coutry
                    </div>
                </div>
                <div class="about">
                    <div class="about-title">About</div>
                    <div class="about-description">We are a leading company in luxury goods, committed to providing top-quality products and services. Our mission is to enhance the lives of our customers with elegance and sophistication.</div>
                </div>
                <div class="partership">
                    <div class="partership-title">Partership</div>
                    <div class="partership-description">Interested in partnering with us? We offer a range of collaboration opportunities including co-branding, joint ventures, and more. Contact us to explore how we can work together.</div>
                </div>
                <div class="archive">
                    <div class="archive-title">Archive</div>
                    <div class="archive-description">Browse through our past articles, newsletters, and updates to get more insights into our company's journey and achievements.</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>