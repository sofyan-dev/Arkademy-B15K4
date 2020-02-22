<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body bgcolo="#FFEFEF">
  <nav class="navbar">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <img src="img/1_7ugSMISUo8vYf9ILG6VmuQ.png" class="img">
      <form style="position: center" class="form-inline">
      
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
   </form>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <button type="button" class="add btn btn-warning my-2 my-sm-0" data-toggle="modal" data-target="#myModal">ADD</button>
    </div>
  </nav>

  <!-- Modal add -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
          <h4 class="modal-title">Add Data</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                        <option>Raisa Andriana</option>
                        <option>Pevita Pearce</option>
                        <option>Mochamad Sofyan</option>
                      </select> </div>
          <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                        <option>Drink</option>
                        <option>Food</option>
                </select>
          </div>
          <div class="form-group">
                <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Iced Tea">
                      </div>
        
          <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp10.000">
              </div>
                
              </select> 
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Add</button>
            </div>
            </div>
            </div>
            </div>

  <!-- Modal delete -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
        </div>
        <div class="modal-body">
          <center>
            <img src="img/checked.png">
            <h2>Data Cashier telah berhasil dihapus</h2>
          </center>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal edit -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
            <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Raisa Andriana</option>
                <option>Pevita Pearce</option>
                <option>Mochamad Sofyan</option>
                </select> </div>
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Drink</option>
              <option>Food</option>
            </select>
          </div>
          <div class="form-group">
                <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Iced Tea">
                </div>
        
          <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp10.000">
              </div>
            </select>
                </div>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Edit</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm">
        <br>
        <br>
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Cashier</th>
              <th>Product</th>
              <th>Category</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Pevita Pearce</td>
              <td>Latte</td>
              <td>Drink</td>
              <td>10.000</td>
              <td><a data-toggle="modal" data-target="#myModal3"><img src="img/edit.png" width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal2"><img src="img/trash.png" width="10%"></a></td>
            </tr>
            <tr>
                    <td>2</td>
                    <td>Raisa Andriana</td>
                    <td>Cake</td>
                    <td>Food</td>
                    <td>20.000</td>
                    <td><a data-toggle="modal" data-target="#myModal3"><img src="img/edit.png" width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal2"><img src="img/trash.png" width="10%"></a></td>
                  </tr>
                  <tr>
                        <td>3</td>
                        <td>Raisa Andriana</td>
                        <td>Cake</td>
                        <td>Food</td>
                        <td>20.000</td>
                        <td><a data-toggle="modal" data-target="#myModal3"><img src="img/edit.png" width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal2"><img src="img/trash.png" width="10%"></a></td>
                      </tr>
            <tr>
                    <td>4</td>
                    <td>Pevita Pearce</td>
                    <td>Gudeg</td>
                    <td>Food</td>
                    <td>20.000</td>
                    <td><a data-toggle="modal" data-target="#myModal3"><img src="img/edit.png" width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal2"><img src="img/trash.png" width="10%"></a></td>
                  </tr>
                <tr>
                    <td>5</td>
                    <td>Mochamad Sofyan</td>
                    <td>Brownies</td>
                    <td>Food</td>
                    <td>50.000</td>
                    <td><a data-toggle="modal" data-target="#myModal3"><img src="img/edit.png" width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal2"><img src="img/trash.png" width="10%"></a></td>
                  </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>