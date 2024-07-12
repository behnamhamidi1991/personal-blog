 <?php 
    use Framework\Session;
 ?>
 
 <!-- HEADER -->
 <header id="header" class="header">
        <div class="logoContainer">
            <a href="/" class="logo">
                <i class='bx bx-code'></i>
                <span>DevAcademy</span>
            </a>
        </div>

        <div class="nav-links">
            <ul class="navigation-box">
                <li class="nav-item">
                    <a href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="/courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="header-buttons">
            <?php if (Session::has('user')) : ?>
                <div class="blog-button">
                    <div class="welcome">
                        Welcome <?=  Session::get('user')['name'] ?>
                    </div>
                    <a href="/blog/create" class="createPost">Create Post</a>
                    <form method="POST" action="/auth/logout">
                        <button type="submit" class="logoutBtn">Logout</button>
                    </form>
                </div>
                <?php else : ?>
                <div class="user-buttons">
                    <a href="/auth/login" class="loginBtn">Login</a>
                    <a href="/auth/create" class="registerBtn">Register</a>
                </div>
                <?php endif; ?>

      
           
        </div>
    </header>
