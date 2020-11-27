<style>
    #menu ul {
        margin: 0;
        padding: 0;
    }

    #menu .main-menu {
        display: none;
    }

    #tm:checked+.main-menu {
        display: block;
    }

    #menu input[type="checkbox"],
    #menu ul span.drop-icon {
        display: none;
    }

    #menu li,
    #toggle-menu,
    #menu .sub-menu {
        border-style: solid;
        border-color: rgba(0, 0, 0, .05);
    }

    #menu li,
    #toggle-menu {
        border-width: 0 0 1px;
    }

    #menu .sub-menu {
        background-color: #444;
        border-width: 1px 1px 0;
        margin: 0 1em;
    }

    #menu .sub-menu li:last-child {
        border-width: 0;
    }

    #menu li,
    #toggle-menu,
    #menu a {
        position: relative;
        display: block;
        color: white;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, .125);
    }

    #menu,
    #toggle-menu {
        background-color: #09c;
    }

    #toggle-menu,
    #menu a {
        padding: 1em 1.5em;
    }

    #menu a {
        transition: all .125s ease-in-out;
        -webkit-transition: all .125s ease-in-out;
    }

    #menu a:hover {
        background-color: white;
        color: #09c;
    }

    #menu .sub-menu {
        display: none;
    }

    #menu input[type="checkbox"]:checked+.sub-menu {
        display: block;
    }

    #menu .sub-menu a:hover {
        color: #444;
    }

    #toggle-menu .drop-icon,
    #menu li label.drop-icon {
        position: absolute;
        right: 1.5em;
        top: 1.25em;
    }

    #menu label.drop-icon,
    #toggle-menu span.drop-icon {
        border-radius: 50%;
        width: 1em;
        height: 1em;
        text-align: center;
        background-color: rgba(0, 0, 0, .125);
        text-shadow: 0 0 0 transparent;
        color: rgba(255, 255, 255, .75);
    }

    #menu .drop-icon {
        line-height: 1;
    }

    .container-fluid{
        background-image: url(b2.jpg);
    }

    @media only screen and (max-width: 64em) and (min-width: 52.01em) {
        #menu li {
            width: 33.333%;
        }

        #menu .sub-menu li {
            width: auto;
        }
    }

    @media only screen and (min-width: 52em) {
        #menu .main-menu {
            display: block;
        }

        #toggle-menu,
        #menu label.drop-icon {
            display: none;
        }

        #menu ul span.drop-icon {
            display: inline-block;
        }

        #menu li {
            float: left;
            border-width: 0 1px 0 0;
        }

        #menu .sub-menu li {
            float: none;
        }

        #menu .sub-menu {
            border-width: 0;
            margin: 0;
            position: absolute;
            top: 100%;
            left: 0;
            width: 12em;
            z-index: 3000;
        }

        #menu .sub-menu,
        #menu input[type="checkbox"]:checked+.sub-menu {
            display: none;
        }

        #menu .sub-menu li {
            border-width: 0 0 1px;
        }

        #menu .sub-menu .sub-menu {
            top: 0;
            left: 100%;
        }

        #menu li:hover>input[type="checkbox"]+.sub-menu {
            display: block;
        }
    }

    .container-fluid{
        background-image: url(b5.jpg);
        background-size: cover;
        padding-left: 150px;
        padding-top: 10px;
    }
</style>

<div class="container-fluid">
   <div class="row">
        <div class="col-md-4"><img src="assets/img/knitsol-logo-new.png" class="img-fluid"></div>
        <div class="col-md-8"> </div>
    </div>
    <div class="row">
        <nav id="menu">
            <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
            <input type="checkbox" id="tm">
            <ul class="main-menu clearfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Services
                        <span class="drop-icon">▾</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                    </a>
                    <input type="checkbox" id="sm1">
                    <ul class="sub-menu">
                        <li><a href="ser-dev.php">IT Development & Testing</a></li>
                        <li><a href="ser-tr.php">Training & Skills</a></li>
                        <li><a href="ser-con.php">Consultancy</a></li>
                    </ul>
                </li>
                <li><a href="#">Industries</a></li>
                <li><a href="#">Products
                        <span class="drop-icon">▾</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                    </a>
                    <input type="checkbox" id="sm1">
                    <ul class="sub-menu">
                        <li><a href="pr-zohomh.php">Zoho Marketing Hub</a></li>
                        <li><a href="#">Salesforce Marketing Cloud</a></li>
                        <li><a href="#">Salesforce Pardot</a></li>
                    </ul>
                </li>
                <li><a href="#">Solutions
                        <span class="drop-icon">▾</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                    </a>
                    <input type="checkbox" id="sm1">
                    <ul class="sub-menu">
                        <li><a href="sol-crm.php">CRM</a></li>
                        <li><a href="sol-erp.php">StoneworkERP</a></li>
                    </ul>
                </li>
                <li><a href="training.php">Trainings</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
