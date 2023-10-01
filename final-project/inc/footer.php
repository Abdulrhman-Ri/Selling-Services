<!-- footer -->
    <footer>
        <div class="footer-container">
            <div class="about group">
                <h2>FreeLance</h2>
                <p>Website for the sale of services</p>
                <a href="#about">About Us</a>
            </div>
            <div class="hr"></div>
            <div class="info group">
                <h3>More</h3>
                <ul>
                    <li><a href="./index.php">🌎 Home</a></li>
                    <li><a href="./addService.php">➕ Add</a></li>
                    <li><a href="./view.php">💻 View</a></li>
                </ul>
            </div>
            <div class="hr"></div>
            <div class="follow group">
                <h3>Follow</h3>
                <ul>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright group">
            <p>© 2023 by Abdalrhman Ri. All rights reserved.</p>
        </div>
    </footer>
    
    <style>
        /* footer */
footer {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: var(--second-color);
    width: 100%;
    margin-top: 50px;
    padding: 3rem 2rem;
    color: #fff;
}

footer a {
    color: #fff;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
    max-width: 1150px;
}

.footer-container .about h2 {
    font-size: 3em;
    font-weight: 600;
    background: linear-gradient(to top, transparent 0%, #fff 50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    opacity: 0.8;
}

.footer-container .about p {
    font-size: var(--normal-font-size);
    font-weight: 300;
    margin-bottom: 30px;
}

.footer-container .info,
.footer-container .follow {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.footer-container .info h3,
.footer-container .follow h3 {
    font-size: 1.1em;
    font-weight: 500;
    margin-bottom: 30px;
}

.footer-container .info ul,
.footer-container .follow ul {
    display: flex;
}

.footer-container .info a {
    margin: 20px;
}

.footer-container .follow a {
    font-size: 1.5em;
    margin: 20px;
}

.footer-copyright p {
    font-size: var(--normal-font-size);
    font-weight: 300;
    margin-top: 50px;
}
    </style>