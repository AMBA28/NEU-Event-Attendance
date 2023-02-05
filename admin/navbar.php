<style>
    ::-webkit-input-placeholder { 
      color: #fff;
    }
    ::-moz-placeholder { 
      color: #fff;
    }
    .search-focus {
        background: url(http://www.iconsdb.com/icons/preview/white/search-12-xxl.png)     no-repeat right;
        border: 1px solid #ccc;
        outline: none;
        background-size: 20px;
        background-position: 13px;
        border-radius: 20px;
        width: 50px;
        height: 15px;
        padding: 20px;
        transition: all .5s;
        color: #fff;
    }
    .search-focus:focus{
        width: 300px;
        padding-left: 50px;
    }
    
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../images/neu_logo.svg" alt="NEU Logo" class="mr-2" height="30">
    <a class="navbar-brand" href="index.php">New Era University</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-6">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../event_page.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Campuses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin/index.php">Admin</a>
            </li>
        </ul>
        
    </div>
    <form class="form-inline">
       
        <input type="text" class="search-focus" name="" placeholder="  Search Events">
<!--
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
-->
    </form>
</nav>