       <div id="top">
            <div class="header">
                <div><a href="index.php"> Trang chủ </a></div>
                <div><a href="register.php"> Đăng ký</a></div>
                <div><a href="viewusers.php">Danh sách người dùng</a></div>
                <?php
                    if(isset($_SESSION['user'])){
                        echo '<div><a href="change-pass.php">Đổi mật khẩu</a></div>';
                    }else{
                        echo '<div><a href="login.php"> Đăng Nhập</a></div>';
                    }
                ?>
                <?php
                    if(isset($_SESSION['user'])){
                        echo '<div><a href="logout.php">Thoát</a></div>';
                    }else{
                        echo '<div><a href="login.php"> Đăng Nhập</a></div>';
                    }
                ?>
            </div>
        </div>