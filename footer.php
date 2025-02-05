<section>
<footer>
    <div class="container footer">
        <div class="row">
            <div class="col-sm-4 footer-section">
            <img src="<?php echo 'images/logo-image.png'; ?>" alt="logo-company" width="100px"height="100px"style="margin-left:5%;">
                <p>Language Learning App is a free and easy-to-use language learning platform that helps you learn new languages by connecting with native speakers and providing personalized learning experiences.</p>
            </div>
            <div class="col-sm-4 footer-section">
                <h4>Contact Us</h4>
                <ul class="contact-list">
                    <li>Email: <a href="mailto:support@languagelearningapp.com">support@languagelearningapp.com</a></li>
                    <li>Phone: <a href="tel:+11234567890">+1 (123) 456-7890</a></li>
                    <li>Address: 123 Main St, City, State, Zip</li>
                </ul>
            </div>
            <div class="col-sm-4 footer-section">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#" class="social-icon facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icon twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="social-icon google"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
<style>
    footer {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        padding: 30px 0;
        font-family: 'Arial', sans-serif;
    }

    .footer {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .footer-section {
        padding: 20px;
        position: relative;
    }

    .footer-section:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: -1px;
        width: 1px;
        background-color: #ccc;
    }

    .footer-section:first-child:before {
        display: none;
    }

   .footer-section h4 {
        color: #343a40;
        font-size: 18px;
        margin-bottom: 15px;
        text-transform: uppercase;
        border-bottom: 2px solid #007bff;
        display: inline-block;
        padding-bottom: 5px;
    }

    .footer-section p, ul li {
        color: #6c757d;
        font-size: 14px;
        line-height: 1.6;
    }

    .contact-list {
        list-style-type: none;
        padding: 0;
    }

    .contact-list li {
        margin: 5px 0;
    }

    .contact-list a {
        color: #007bff;
        text-decoration: none;
    }
    .social-icons {
    display: flex;
    gap: 10px;
    justify-content: center;
    padding-top: 15px;
}

    .social-icon {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        transition: transform 0.3s, background-color 0.3s;
    }

    .social-icon:hover {
      /* rotate: 45deg; */
      transform: translateY(-10px);
      color:white;
      background-color: black;
    }

    .social-icon i {
        font-size: 16px;
    }
    .social-icons a:hover {
    text-decoration:none !important;
    }
    @media (max-width: 576px) {
        .footer-section {
            text-align: center;
            border: none;
            margin-bottom: 20px;
        }

        .footer-section:before {
            display: none;
        }
    }
    @media only screen and (max-width: 600px) {
    footer .footer-section {
        text-align: center;
        padding: 10px;
    }

    .social-icons {
        gap: 5px;
    }

    .social-icon {
        width: 30px;
        height: 30px;
    }
}
@media screen and (max-height: 450px) {
    footer {
        padding: 20px 5px;
    }

    .footer-section {
        font-size: 12px;
    }

    .social-icon {
        width: 25px;
        height: 25px;
        font-size: 12px;
    }
}
</style>