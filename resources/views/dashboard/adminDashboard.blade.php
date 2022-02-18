<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledashboard.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>laravelbrother</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#" class="active"><span class="lab la-accusoft"></span><span>Dashboard</span></a>
                <li><a href="#"><span class="las la-users"></span><span>Customers</span></a>
                <li><a href="#"><span class="las la-clipboard-list"></span><span>Projects</span></a>
                <li><a href="#"><span class="las la-shopping-bag"></span><span>Orders</span></a>
                <li><a href="#"><span class="las la-user-circle"></span><span>Inventory</span></a>
                <li><a href="#"><span class="las la-clipboard-list"></span><span>Tasks</span></a>
            </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h3><label for=""><span class="las la-bars"></span></label>Dashboard</h3>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" placeholder="Search here" id="">
            </div>
            <div class="wser-wrapper">
                <img src="img/picture.jpg" alt="Admin" width="40px" height="40px">
                <div>
                    <h4>AAKASH SRIVASTAVA</h4>
                    <small>Second Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Customers</span>
                    </div>
                    <div><span class="las la-users"></span></div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>Projects</span>
                    </div>
                    <div><span class="las la-clipboard-list"></span></div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>100</h1>
                        <span>Orders</span>
                    </div>
                    <div><span class="las la-shopping-bag"></span></div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$20K</h1>
                        <span>Income</span>
                    </div>
                    <div><span class="lab la-google-wallet"></span></div>
                </div>
            </div>
            <div class="recent-flex">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td><span class="status"></span>review</td>
                                    </tr>
                                    <tr>
                                        <td>Web development</td>
                                        <td>Frontend</td>
                                        <td><span class="status"></span>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td><span class="status"></span>panding</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="customers">

                </div>
            </div>
        </main>
    </div>
</body>
</html>