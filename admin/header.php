<style type="text/css">
 #list {
     
padding: 2px;
margin: 2px;
     
     
 }
#list a:hover{
background-color:skyblue;
color: black;
}
.img{
    width: 3.3rem;
    height:3.3rem;
    border-radius:16%;
}
</style>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<div class="container">
      <a class="navbar-brand" href="dashboard.php"> 
          <img src="photo/logo1.jpg " class="img" />
      </a>

      <p style="font-size:24px;font-family:AlgerianBasD;color:#CCC;padding-left:-50rem;margin-bottom: -0px;font-weight: bold">
          August Cafe & Fried Chicken
      </p>
        <div>
              <ul class="nav justify-content-end">
                  <li class="nav-item">
                      <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                                  <i  class="fa fa-list" style="font-size:20px"></i>
                            </button>
                            <div class="dropdown-menu " id="list">
                                <a class="dropdown-item" href="dashboard.php" title="home"> 
                                      <i class="fa fa-home" style="font-size: 18px;">&nbsp;
                                          Home
                                      </i>
                                 </a>
                                <a class="dropdown-item" href="logout.php" title="logout" >
                                      <i class="fa fa-sign-out"  style="font-size: 18px;">&nbsp;
                                          Log Out
                                      </i>
                                </a>
                            </div>
                      </div>
                  </li>
              </ul>
        </div>
  </div>
  </div>
  
</nav>
