<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <link rel="stylesheet" href="assest/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سفارش غرفه</title>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>Online Store</h1>
        <p>Mission, Vission & Values</p>
    </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <form action="">

        <!--<div class="col-lg-6">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">مشخصات خریدار</div>
                    <div class="panel-body">
                        body
                    </div>
                    <div class="panel-footer">
                        footer
                    </div>
                </div>
            </div>
        </div>-->
            <div class="col-lg-12">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">مشخصات خریدار</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" placeholder="نام و نام خانوادگی">
                                </div>
                                <label for="name" class="col-sm-4 control-label">نام شخص حقیقی / حقوقی</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ostan" placeholder="استان">
                                </div>
                                <label for="ostan" class="col-sm-4 control-label">نشانی کامل / استان : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="shahrestan" placeholder="شهرستان">
                                </div>
                                <label for="shahrestan" class="col-sm-4 control-label">شهرستان : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="shahr" placeholder="شهر">
                                </div>
                                <label for="shahr" class="col-sm-4 control-label">شهر : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephone" placeholder="تلفن">
                                </div>
                                <label for="telephone" class="col-sm-4 control-label">تلفن ثابت : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="mobile" placeholder="تلفن همراه">
                                </div>
                                <label for="mobile" class="col-sm-4 control-label">تلفن همراه : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="posti" placeholder="کد پستی">
                                </div>
                                <label for="posti" class="col-sm-4 control-label">کد پستی ۱۰ رقمی : </label>
                            </div>
                            <hr><hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="آدرس " rows="5" id="address"></textarea>
                                </div>
                                <label for="address" class="col-sm-4 control-label" >نشانی : </label>
                            </div>





                        </div>
                        <div class="panel-footer">
                            footer
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>


</body>
</html>