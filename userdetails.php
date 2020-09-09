<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets1/img/brand/lo1.png">
  <link rel="icon" type="image/png" href="./assets1/img/brand/lo1.png">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <title>
    Data|MedEaze
  </title>
  <link href="./assets1/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets1/css/style.css" rel="stylesheet" />
  <link href="./assets1/css/sidenav.css" rel="stylesheet" />
  <link href="./assets1/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  </style>
</head>

<body>
  <div id="spinner">
    <div id="loader-wrapper">
      <div id="loader">
      </div>
      <svg id="Capa_1" enable-background="new 0 0 512.001 512.001" height="512" viewBox="0 0 512.001 512.001" width="512" xmlns="http://www.w3.org/2000/svg">
        <g>
          <path d="m340.688 354.54h66.106v144.908h-66.106z" fill="#c3d5ef" />
          <path d="m340.688 369.258h66.106v16.454h-66.106z" fill="#b7c8ea" />
          <path d="m297.065 114.679 207.435-85.743-130.759 113.249-66.335 16.917z" fill="#c3d5ef" />
          <path d="m359.876 98.51h-23.694l-39.116 16.169 10.341 44.423 66.335-16.917 15.889-13.761-8.182-16.524c-4.062-8.201-12.422-13.39-21.573-13.39z" fill="#b7c8ea" />
          <path d="m105.207 354.54h66.106v144.908h-66.106z" fill="#c3d5ef" />
          <path d="m105.207 369.258h66.106v16.454h-66.106z" fill="#b7c8ea" />
          <g>
            <path d="m410.149 213.775h-308.297c-7.243 0-13.115 5.872-13.115 13.115v110.078h334.528v-110.077c-.001-7.244-5.873-13.116-13.116-13.116z" fill="#df6b57" />
            <path d="m410.149 213.775h-22.482c7.243 0 13.115 5.872 13.115 13.115v110.078h22.482v-110.077c0-7.244-5.871-13.116-13.115-13.116z" fill="#dd544f" />
          </g>
          <path d="m303.288 316.969h-94.575v-30.034c0-2.23 1.807-4.037 4.037-4.037h86.501c2.23 0 4.037 1.807 4.037 4.037z" fill="#e7ecf6" />
          <path d="m299.251 282.898h-18.488c2.229 0 4.037 1.807 4.037 4.037v30.034h18.488v-30.034c0-2.23-1.808-4.037-4.037-4.037z" fill="#d8e2f1" />
          <path d="m279.793 396.167h-47.586c-4.787 0-8.667-3.88-8.667-8.667v-18.242h64.919v18.242c.001 4.786-3.879 8.667-8.666 8.667z" fill="#2b4d66" />
          <path d="m276.641 183.513h73.479v30.263h-73.479z" fill="#365e7d" />
          <path d="m394.205 183.513h-117.564v-68.834h83.479z" fill="#df6b57" />
          <path d="m360.12 114.679h-23.042l34.085 68.834h23.043z" fill="#dd544f" />
          <g>
            <path d="m7.5 476.855c41.418 0 41.418-30 82.837-30s41.418 30 82.837 30c41.417 0 41.417-30 82.833-30 41.415 0 41.415 30 82.831 30s41.416-30 82.832-30c41.415 0 41.415 30 82.831 30v31.396h-497.001z" fill="#d3effb" />
            <path d="m421.669 446.855c-41.416 0-41.416 30-82.832 30-41.415 0-41.415-30-82.831-30-41.417 0-41.417 30-82.833 30-41.418 0-41.418-30-82.837-30-41.418 0-41.418 30-82.837 30v22.593c41.418 0 41.418-30 82.837-30 41.418 0 41.418 30 82.837 30 41.417 0 41.417-30 82.833-30 41.415 0 41.415 30 82.831 30s41.416-30 82.832-30c41.415 0 41.415 30 82.831 30v-22.593c-41.415 0-41.415-30-82.831-30z" fill="#b1e4f9" />
          </g>
          <path d="m49.365 316.969h413.27v52.289h-413.27z" fill="#365e7d" />
          <path d="m441.18 316.969h21.455v52.289h-21.455z" fill="#2b4d66" />
          <g>
            <path d="m135.295 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m186.577 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m237.859 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m289.142 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m340.424 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m391.705 255.321v-11.007c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.007c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
            <path d="m307.405 136.104c-4.143 0-7.5 3.358-7.5 7.5v3.662c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-3.662c0-4.142-3.357-7.5-7.5-7.5z" />
            <path d="m339.882 136.104c-4.143 0-7.5 3.358-7.5 7.5v3.662c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-3.662c0-4.142-3.358-7.5-7.5-7.5z" />
            <path d="m504.5 469.355c-18.276 0-26.96-6.29-37.016-13.574-10.629-7.699-22.677-16.426-45.815-16.426-2.596 0-5.045.115-7.375.321v-62.918h48.342c4.143 0 7.5-3.357 7.5-7.5v-52.289c0-4.143-3.357-7.5-7.5-7.5h-5.431v-9.535c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v9.535h-11.44v-82.578c0-11.367-9.248-20.615-20.615-20.615h-52.53v-15.263h36.585c2.594 0 5.004-1.341 6.372-3.545s1.5-4.958.349-7.283l-17.89-36.128 91.674-79.397v74.753c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-87.745l19.701-17.063c2.78-2.408 3.404-6.478 1.473-9.608s-5.846-4.397-9.248-2.993l-97.467 40.287c-3.828 1.582-5.648 5.968-4.066 9.796 1.583 3.828 5.967 5.649 9.797 4.066l54.762-22.635-88.502 76.65-9.318-18.819c-1.265-2.555-3.869-4.172-6.721-4.172h-25.277l47.101-19.469c3.828-1.582 5.648-5.968 4.066-9.796s-5.964-5.647-9.797-4.066l-80.637 33.332h-18.935c-4.143 0-7.5 3.358-7.5 7.5v68.834 22.763h-32.269l-24.469-172.87c-.523-3.699-3.689-6.449-7.426-6.449h-9.939v-15.705c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v15.706h-9.939c-3.736 0-6.902 2.75-7.426 6.449l-24.469 172.87h-36.353c-11.367 0-20.615 9.248-20.615 20.615v21.624c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-21.624c0-3.096 2.519-5.615 5.615-5.615h308.298c3.097 0 5.615 2.519 5.615 5.615v82.578h-104.977v-22.534c0-6.361-5.176-11.537-11.537-11.537h-86.501c-6.361 0-11.537 5.176-11.537 11.537v22.534h-104.977v-30.968c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v30.968h-11.44v-9.535c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v9.535h-5.431c-4.143 0-7.5 3.357-7.5 7.5v52.289c0 4.143 3.357 7.5 7.5 7.5h48.342v62.917c-2.329-.206-4.776-.321-7.37-.321-23.14 0-35.188 8.727-45.817 16.426-10.056 7.284-18.741 13.574-37.02 13.574-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5c23.141 0 35.188-8.727 45.818-16.426 10.056-7.284 18.74-13.574 37.019-13.574s26.964 6.29 37.02 13.574c10.338 7.488 22.022 15.945 43.943 16.404 22.114.462 34.05-6.522 47.691-16.404 10.056-7.284 18.739-13.574 37.017-13.574 18.276 0 26.96 6.29 37.016 13.574 10.629 7.699 22.677 16.426 45.815 16.426 20.534 0 31.916-6.357 45.815-16.426 10.056-7.284 18.739-13.574 37.016-13.574s26.961 6.29 37.017 13.574c10.629 7.699 22.676 16.426 45.814 16.426 4.143 0 7.5-3.357 7.5-7.5s-3.358-7.499-7.501-7.499zm-220.358-347.177h12.9c.009 0 .018.002.026.002.013 0 .027-.002.04-.002h58.356l26.657 53.834c-11.651 0-87.142 0-97.98 0v-53.834zm-113.213-40.068 29.822 23.372-36.328 22.592zm28.582-32.762 5.748 40.609-27.337-21.424zm9.701 68.536 6.67 47.125-44.659-23.5zm-23.966-75.927-9.876 8.776 1.242-8.776zm-24.354 111.065 49.8 26.206-33.657 27.047h-23.681zm40.09 53.253 18.623-14.966 2.118 14.966zm83.16 0v-15.263h58.479v15.263zm-67.929 84.123h79.575v19.071h-79.575zm-159.348 34.071h398.271v37.289c-70.751 0-348.746 0-398.271 0zm175.343 64.198c-.644 0-1.167-.523-1.167-1.167v-10.742h49.919v10.742c0 .644-.523 1.167-1.167 1.167zm-119.501 54.024v-65.933h51.105v91.965c-12.229-1.768-19.491-7.027-27.657-12.942-6.531-4.731-13.602-9.846-23.448-13.09zm97.484 13.089c-8.958 6.489-16.846 12.176-31.379 13.343v-92.366h37.229v10.743c0 8.914 7.253 16.167 16.167 16.167h16.292v36.02c-18.361 1.654-28.895 9.274-38.309 16.093zm165.663 0c-8.168 5.917-15.431 11.178-27.666 12.944v-30.681c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v31.08c-14.525-1.169-22.411-6.855-31.367-13.343-9.417-6.821-19.952-14.443-38.321-16.094v-36.019h16.293c8.914 0 16.167-7.253 16.167-16.167v-10.742h37.229v31.298c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-31.298h51.105v65.935c-9.841 3.244-16.91 8.358-23.44 13.087z" />
            <path d="m138.26 394.971c-4.143 0-7.5 3.357-7.5 7.5v31.882c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-31.882c0-4.143-3.358-7.5-7.5-7.5z" />
            <path d="m373.741 394.971c-4.143 0-7.5 3.357-7.5 7.5v31.882c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-31.882c0-4.143-3.357-7.5-7.5-7.5z" />
          </g>
        </g>
      </svg>
    </div>
  </div>
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar shadow-sm navbar-main navbar-expand-lg navbar-light navbar-tr sticky-top" style="position: relative !important;">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="./index.php">
        <img src="./assets1/img/brand/lo1.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fa fa-bars br" style="color: #000;"></i>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
                <img src="./assets1/img/brand/lo1.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
            <a class="nav-link mb-3 active font-weight-bold mt-2" id="users-tab" data-toggle="tab" href="#tabs-users" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-users mr-2"></i>Customer's List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-3 font-weight-bold mt-2" id="resources-tab" data-toggle="tab" href="#tabs-resources" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-file mr-2"></i>Shop List</a>
          </li>
          
          
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="p-4 mt-2 mb-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="card shadow-sm col-md-12">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <!-- USERS TAB -->

                <div class="tab-pane fade show active" id="tabs-users" role="tabpanel" aria-labelledby="users-tab">


                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4">User Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="resourceInput" placeholder="Search for Courses">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#exampleModalLongUser">
                        Add New User
                      </button>
                      <div class="modal fade" id="exampleModalLongUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="updatecode.php" method="post">
                   <div class="modal-body">
            <input type="hidden" name="update_iduser" id="update_iduser">
                          <div class="form-group">
                            <label style="text-align: center;">Username</label>
                            <input class="form-control" id="usernameed" rows="3" name="usernameu" ></input>
                          </div>
                          
                          <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control" id="mobiled" rows="3" name="mobileu" ></input>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" id="emailed" rows="3" name="emailu" ></input>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" id="addressed" rows="3" name="addu" ></input>
                          </div>
                          
                           <div class="form-group">
                            <label>Amount</label>
                            <input class="form-control" id="amounted" rows="3" name="amountu"></input>
                          </div>
                          
                          <div class="form-group">
                            <label>Paid User</label>
                            <br><input class="form-control text-uppercase font-weight-bold text-primary" id="paidus" rows="3" ></input>

                            <select name="paidu" rows="3" class="form-control">
                              <option value="">Select a Type</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>

                          </div>
                          <div class="form-group">
                            <label>Delivery Status</label>
                            <br><input class="form-control text-uppercase font-weight-bold text-primary" id="deli" rows="3" readonly></input>

                            <select name="delu" rows="3" class="form-control">
                              <option value="">Select a Type</option>
                              <option value="1">Recived</option>
                              <option value="0">Delivered</option>
                              <option value="2">Not Delivered</option>

                            </select>

                          </div>

                          
                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    </div>
                  </div>
                  <?php
                  $query = "SELECT * FROM udata";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Email-Id</th>
                        <th>Prescription</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Delivery Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-user">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr class="userrow">
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-uppercase"> <?php echo $row['name']; ?></td>
                            <td> <?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['addr']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['pes']; ?></td>
                            <td class="text-right"><?php echo $row['amount']; ?></td>
                             <td><?php echo $row['paid']; ?></td>
                            <td><?php echo $row['del']; ?></td>
                           
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn mt-1 btn-success btn-icon btn-sm editbuttonuser " data-original-title="" title="">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn mt-1 btn-danger btn-icon btn-sm deletebuttonuser " data-toggle="modal" data-target="#deletemodaluser">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>

                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="modal fade" id="editmodaluser" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editmodaluser">Edit Existing User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="updatecode.php" method="post">
                        <div class="modal-body">
                          <input type="hidden" name="update_iduser" id="update_iduser">
                          <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" id="usernameed" rows="3" name="usernameu" ></input>
                          </div>
                          
                          <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control" id="mobiled" rows="3" name="mobileu" ></input>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" id="emailed" rows="3" name="emailu" ></input>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" id="addressed" rows="3" name="addu" ></input>
                          </div>
                          
                           <div class="form-group">
                            <label>Amount</label>
                            <input class="form-control" id="amounted" rows="3" name="amountu"></input>
                          </div>
                          
                          <div class="form-group">
                            <label>Paid User</label>
                            <br><input class="form-control text-uppercase font-weight-bold text-primary" id="paidus" rows="3" ></input>

                            <select name="paidu" rows="3" class="form-control">
                              <option value="">Select a Type</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>

                          </div>
                          <div class="form-group">
                            <label>Delivery Status</label>
                            <br><input class="form-control text-uppercase font-weight-bold text-primary" id="deli" rows="3" readonly></input>

                            <select name="delu" rows="3" class="form-control">
                              <option value="">Select a Type</option>
                              <option value="1">Recived</option>
                              <option value="0">Delivered</option>
                              <option value="2">Not Delivered</option>

                            </select>

                          </div>

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="updateuser">Update changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Delete popup Form -->
                <div class="modal fade" id="deletemodaluser" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="deletemodaluser">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="deletecode.php" method="post">
                        <div class="modal-body">
                          <input type="hidden" name="delete_id" id="delete_iduser">
                          <h4>Do you want to Delete this data</h4>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                          <button type="submit" class="btn btn-primary" name="deletedatauser">Yes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- CLOSING USERS TAB -->
                <!-- RESOURCE TAB -->
                <?php
                $query = "SELECT * FROM category ";
                $query_run = mysqli_query($conn, $query);
                ?>
                <div class="tab-pane fade" id="tabs-resources" role="tabpanel" aria-labelledby="resources-tab">
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="newcourse">Add New Shop</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="insertcode.php" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Name of the Course</label>
                              <input class="form-control" rows="3" name="name" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the course</label>
                              <textarea class="form-control" rows="3" name="sdec" required></textarea>
                            </div>

                            <div class="form-group">
                              <label>Video Id of the Course</label>
                              <input class="form-control" rows="3" name="video"></input>
                            </div>

                            <div class="form-group">
                              <label>File of the Course</label>
                              <input class="form-control" type="file" rows="3" name="uploadfile"></input>

                            </div>
                            <div class="form-group">
                              <label>Category</label>
                              <select name="category1" rows="3" class="form-control">
                                <?php
                                if ($query_run) {
                                  foreach ($query_run as $row) {
                                ?>

                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['catname'] ?>(<?php echo $row['cattype'] ?>)</option>
                                <?php
                                  }
                                } else {
                                  echo "No Record Found";
                                }
                                ?>

                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="insertdata">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Edit popup Form -->
                  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodal">Edit New Shop</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="updatecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="update_id" id="update_id">
                            <div class="form-group">
                              <label>Name of the Course</label>
                              <input class="form-control" id="namee" rows="3" name="name1"></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the course</label>
                              <textarea class="form-control" id="sdece" rows="3" name="sdec1"></textarea>
                            </div>

                            <div class="form-group">
                              <label>Video of the Course</label>
                              <input class="form-control" id="videoe" rows="3" name="video1"></input>
                            </div>


                            <div class="form-group">
                              <label>Category</label>
                              <input class="form-control" id="categorye" rows="3" name="category11"></input>

                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatedata">Update changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete popup Form -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodal">Delete Course</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="deletecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_id">
                            <h4>Do you want to Delete this data</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary" name="deletedata">Yes</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  <?php


                  $query = "SELECT * FROM courses";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4">Shop Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="resourceInput" placeholder="Search for Courses">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalLong">
                        Add New Shop
                      </button>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center"> Course Name</th>
                        <th class="text-center">Short Desc</th>

                        <th class="text-center">Video Id</th>
                        <th class="text-center">Category</th>
                        <th class="text-right">Upload File</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-resource">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td> <?php echo $row['name']; ?></td>
                            <td><?php echo $row['sdec']; ?></td>

                            <td><?php echo $row['video']; ?></td>

                            <td><?php echo $row['catid']; ?></td>
                            <td><?php echo $row['file']; ?></td>
                            <td class="td-actions text-right">
                              <button onclick="success()" type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm editbuttonresource" data-original-title="" title="">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm deletebuttonresource " data-original-title="" title="">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- CLOSING RESOURCE TAB -->
                <!-- CONFERENCE TAB -->
                <div class="tab-pane fade" id="tabs-conference" role="tabpanel" aria-labelledby="conference-tab">
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4 text-center">Conference Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="conferenceInput" placeholder="Search for Conferences">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addconference">
                        Add New Conference
                      </button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="addconference" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="newcourse">Add New Conference</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="insertcode.php" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Name of the Conference</label>
                              <input class="form-control" rows="3" name="namecon"></input>
                            </div>
                            <div class="form-group">
                              <label>Host of the Conference</label>
                              <input class="form-control" rows="3" name="hostcon"></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Conference</label>
                              <textarea class="form-control" rows="3" name="sdeccon"></textarea>
                            </div>
                            <div class="form-group">
                              <label> Date & Time of the Conference</label>
                              <input type="datetime-local" id="datetime-local" rows="3" class="form-control" name="datetimecon">
                            </div>
                            <div class="form-group">
                              <label>Place of the Conference</label>
                              <input class="form-control" rows="3" name="placecon"></input>
                            </div>
                            <div class="form-group">
                              <label>Type of the Conference</label>

                              <select name="typecon" rows="3" class="form-control">
                                <option value="International">International</option>
                                <option value="National">National</option>
                              </select>


                            </div>
                            <div class="form-group">
                              <label>Medium of Conference</label>

                              <select name="mediumcon" rows="3" class="form-control">
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Link of the Conference</label>
                              <input class="form-control" rows="3" name="linkcon"></input>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="insertcon">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Edit popup Form -->
                  <div class="modal fade" id="editmodal1" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodal1">Edit New Conference</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="updatecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="update_idcon" id="update_idcon">
                            <div class="form-group">
                              <label>Name of the Conference</label>
                              <input class="form-control" id="namecon11" rows="3" name="namecon11"></input>
                            </div>
                            <div class="form-group">
                              <label>Host of the Conference</label>
                              <input class="form-control" id="hostcon11" rows="3" name="hostcon11"></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Conference</label>
                              <textarea class="form-control" id="sdeccon11" rows="3" name="sdeccon11"></textarea>
                            </div>
                            <div class="form-group">
                              <label> Date & Time of the Conference</label>
                              <input type="datetime-local" id="datetimecon11" rows="3" class="form-control" name="datetimecon11">
                            </div>
                            <div class="form-group">
                              <label>Place of the Conference</label>
                              <input class="form-control" id="placecon11" rows="3" name="placecon11"></input>
                            </div>
                            <div class="form-group">
                              <label>Type of the Conference</label>
                              <br><input class="form-control text-uppercase font-weight-bold text-primary" id="typecon11" rows="3" readonly></input>

                              <select name="typecon11" rows="3" class="form-control">
                                <option value="">Select a Type</option>
                                <option value="International">International</option>
                                <option value="National">National</option>
                              </select>

                            </div>
                            <div class="form-group">
                              <label>Medium of the Conference</label>
                              <br><input class="form-control text-uppercase font-weight-bold text-primary" id="mediumcon11" rows="3" readonly></input>

                              <select name="mediumcon11" rows="3" class="form-control">
                                <option value="">Select a Type</option>
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                              </select>

                            </div>
                            <div class="form-group">
                              <label>Link of the Conference</label>
                              <input class="form-control" id="linkcon11" rows="3" name="linkcon11"></input>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatecon">Update changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete popup Form -->
                  <div class="modal fade" id="deletemodalcon" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodalcon">Delete Conference</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="deletecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_idc">
                            <h4>Do you want to Delete this data</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary" name="deletedatacon">Yes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php

                  $query = "SELECT * FROM conference";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Id</th>
                        <th>Conference Name</th>
                        <th>Host Name</th>
                        <th>Short Description</th>
                        <th>Date & Time</th>
                        <th>Place</th>
                        <th>Type</th>
                        <th>Medium</th>
                        <th>Link</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-conference">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td> <?php echo $row['name']; ?></td>
                            <td><?php echo $row['host']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['datetime']; ?></td>
                            <td><?php echo $row['place']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['mode']; ?></td>
                            <td><?php echo $row['link']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm editbuttonconference mt-2" data-toggle="modal" data-target="#editmodal1">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm deletebuttonconference mt-2" data-toggle="modal" data-target="#deletemodalcon">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- CLOSING CONFERENCE TAB -->
                <!-- CATEGORY TAB -->
                <div class="tab-pane fade" id="tabs-category" role="tabpanel" aria-labelledby="category-tab">
                  <div class="modal fade" id="exampleModalLongcat" tabindex="-1" role="dialog" aria-labelledby="newcategory" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="newcategory">Add New Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="insertcode.php" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Name of the Category</label>
                              <input class="form-control" rows="3" name="namecat" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Category</label>
                              <textarea class="form-control" rows="3" name="sdeccat" required></textarea>
                            </div>
                            <div class="form-group">

                              <label for="exampleFormControlTextarea1">Type of the Category</label>
                              <select name="typecat" rows="3" class="form-control">
                                <option value="Academic">Academic</option>
                                <option value="Industrial">Industrial</option>
                              </select>


                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="insertdatacat">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Edit popup Form -->
                  <div class="modal fade" id="editmodalcat" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalcat">Edit Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="updatecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="update_idcat" id="update_idcat">
                            <div class="form-group">
                              <label>Name of the Category</label>
                              <input class="form-control" id="catnamee" rows="3" name="catnamee1" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Category</label>
                              <textarea class="form-control" id="catdesce" rows="3" name="catdesce1" required></textarea>
                            </div>
                            <div class="form-group">

                              <label for="exampleFormControlTextarea1">Type of the Category</label>
                              <br><input class="form-control text-uppercase font-weight-bold text-primary" id="cattypee" rows="3" readonly></input>



                              <select name="cattypee1" rows="3" class="form-control">
                                <option value="">Select a Type</option>
                                <option value="Academic">Academic</option>
                                <option value="Industrial">Industrial</option>
                              </select>


                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatedatacat">Update changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete popup Form -->
                  <div class="modal fade" id="deletemodalcat" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodalcat">Delete Course</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="deletecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_idcat">
                            <h4>Do you want to Delete this data</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary" name="deletedatacat">Yes</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  <?php


                  $query = "SELECT * FROM category";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4">Category Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="categoryInput" placeholder="Search for Categories">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#exampleModalLongcat">
                        Add New Category
                      </button>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Category Name</th>
                        <th class="text-center">Category Desc</th>
                        <th class="text-center">Category Type</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-category">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-center"> <?php echo $row['catname']; ?></td>
                            <td class="text-center"><?php echo $row['catdesc']; ?></td>
                            <td class="text-center"><?php echo $row['cattype']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm editbuttoncat" data-original-title="" title="">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm deletebuttoncategory " data-original-title="" title="">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                            <td>

                          </tr>
                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                </td>
                <!-- CLOSING CATEGORY TAB -->
                <!--  KNOWLEDGE TAB -->
                <div class="tab-pane fade" id="tabs-knowledge" role="tabpanel" aria-labelledby="knowledge-tab">
                  <div class="modal fade" id="exampleModalLongKno" tabindex="-1" role="dialog" aria-labelledby="newknowledge" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="newknowledge">Add New Knowledge</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="insertcode.php" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Name of the Knowledge</label>
                              <input class="form-control" rows="3" name="nameknow" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Knowledge</label>
                              <textarea class="form-control" rows="3" name="sdecknow" required></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Type of the Knowledge</label>
                              <select name="typeknow" rows="3" class="form-control">
                                <option value="Link">Link</option>
                                <option value="Image">Image</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Link of the Knowledge</label>
                              <textarea class="form-control" rows="3" name="linkknow"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Image of the Knowledge</label>
                              <input class="form-control" type="file" rows="3" name="uploadimg"></input>

                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="insertdataknow">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Edit popup Form -->
                  <div class="modal fade" id="editmodalknow" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalknow">Edit Knowledge</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="updatecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="update_idknow" id="update_idknow">
                            <div class="form-group">
                              <label>Name of the Knowledge</label>
                              <input class="form-control" rows="3" name="nameknow1" id="nameknow11" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Knowledge</label>
                              <textarea class="form-control" rows="3" name="sdecknow1" id="sdecknow11" required></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Type of the Knowledge</label>
                              <br><input class="form-control text-uppercase font-weight-bold text-primary" id="typeknow11" rows="3" readonly></input>

                              <select name="typeknow1" rows="3" class="form-control">
                                <option value="">Select a Type</option>
                                <option value="Link">Link</option>
                                <option value="Image">Image</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Link of the Knowledge</label>
                              <textarea class="form-control" rows="3" name="linkknow1" id="linkknow11"></textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatedataknow">Update changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete popup Form -->
                  <div class="modal fade" id="deletemodalknow" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodalknow">Delete Knowledge</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="deletecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_idknow">
                            <h4>Do you want to Delete this data</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary" name="deletedataknow">Yes</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  <?php
                  $query = "SELECT * FROM knowledge";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4">Knowledge Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="knowledgeInput" placeholder="Search...">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#exampleModalLongKno">
                        Add New Knowledge
                      </button>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Knowledge Name</th>
                        <th class="text-center">Knowledge Desc</th>
                        <th class="text-center">Knowledge Type</th>
                        <th class="text-center">Knowledge Link</th>
                        <th class="text-center">Image Link</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-knowledge">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-center"> <?php echo $row['name']; ?></td>
                            <td class="text-center"><?php echo $row['sdec']; ?></td>
                            <td class="text-center"><?php echo $row['type']; ?></td>
                            <td class="text-center"><?php echo $row['link']; ?></td>
                            <td class="text-center"><?php echo $row['img']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm editbuttonknow" data-original-title="" title="">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm deletebuttonknow " data-original-title="" title="">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                            <td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- SUBJECT TAB -->
                <div class="tab-pane fade" id="tabs-subject" role="tabpanel" aria-labelledby="subject-tab">
                  <div class="modal fade" id="exampleModalLongSub" tabindex="-1" role="dialog" aria-labelledby="newsubject" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="newsubject">Add New Subject</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="insertcode.php" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Name of the Subject</label>
                              <input class="form-control" rows="3" name="namesub" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Subject</label>
                              <textarea class="form-control" rows="3" name="sdecsub" required></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Type of the Subject</label>
                              <select name="typesub" rows="3" class="form-control">
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Link of the Subject</label>
                              <textarea class="form-control" rows="3" name="linksub"></textarea>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="insertdatasub">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Edit popup Form -->
                  <div class="modal fade" id="editmodalsub" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalsub">Edit Subject</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="updatecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="update_idsub" id="update_idsub">
                            <div class="form-group">
                              <label>Name of the Subject</label>
                              <input class="form-control" rows="3" name="namesub1" id="namesub11" required></input>
                            </div>
                            <div class="form-group">
                              <label>Short Description of the Subject</label>
                              <textarea class="form-control" rows="3" name="sdecsub1" id="sdecsub11" required></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Type of the Subject</label>
                              <br><input class="form-control text-uppercase font-weight-bold text-primary" id="typesub11" rows="3" readonly></input>

                              <select name="typesub1" rows="3" class="form-control">

                                <option value="">Select a Type</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Link of the Subject</label>
                              <textarea class="form-control" rows="3" name="linksub1" id="linksub11"></textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatedatasub">Update changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete popup Form -->
                  <div class="modal fade" id="deletemodalsub" tabindex="-1" role="dialog" aria-labelledby="newcourse" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodalsub">Delete Subject</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="deletecode.php" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="delete_idsub" id="delete_idsub">
                            <h4>Do you want to Delete this data</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary" name="deletedatasub">Yes</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  <?php
                  $query = "SELECT * FROM subject";
                  $query_run = mysqli_query($conn, $query);
                  ?>
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="display-4">Knowledge Details</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-8">
                        <div class="input-group input-group-alternative mb-4">
                          <div class="input-group-prepend shadow-sm">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                          </div>
                          <input class="form-control shadow-sm text-center font-weight-bold" type="text" id="knowledgeInput" placeholder="Search...">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pl-5 pr-5">
                      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#exampleModalLongSub">
                        Add New Subject
                      </button>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Subject Name</th>
                        <th class="text-center">Subject Desc</th>
                        <th class="text-center">Subject Type</th>
                        <th class="text-center">Subject Link</th>

                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-knowledge">
                      <?php
                      if ($query_run) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-center"> <?php echo $row['name']; ?></td>
                            <td class="text-center"><?php echo $row['descsub']; ?></td>
                            <td class="text-center"><?php echo $row['type']; ?></td>
                            <td class="text-center"><?php echo $row['link']; ?></td>

                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm editbuttonsub" data-original-title="" title="">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm deletebuttonsub " data-original-title="" title="">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                            <td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "No Record Found";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- CLOSING SUBJECT TAB -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets1/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets1/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets1/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets1/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
  <script>
    var overlay = document.getElementById("spinner");
    window.addEventListener('load', function() {
      overlay.style.display = "none";
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttonresource').on('click', function() {
        $('#deletemodal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_id').val(data[0]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttonknow').on('click', function() {
        $('#deletemodalknow').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_idknow').val(data[0]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttonconference').on('click', function() {
        $('#deletemodalcon').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_idc').val(data[0]);
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttoncategory').on('click', function() {
        $('#deletemodalcat').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_idcat').val(data[0]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttonuser').on('click', function() {
        $('#deletemodaluser').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_iduser').val(data[0]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.deletebuttonsub').on('click', function() {
        $('#deletemodalsub').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#delete_idsub').val(data[0]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttonresource').on('click', function() {
        $('#editmodal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#update_id').val(data[0]);
        $('#namee').val(data[1]);
        $('#sdece').val(data[2]);
        $('#typee').val(data[3]);
        $('#videoe').val(data[3]);


        $('#categorye').val(data[4]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttonsub').on('click', function() {
        $('#editmodalsub').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#update_idsub').val(data[0]);
        $('#namesub11').val(data[1]);
        $('#sdecsub11').val(data[2]);
        $('#typesub11').val(data[3]);
        $('#linksub11').val(data[4]);

      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttonconference').on('click', function() {

        $('#editmodal1').modal('show');


        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();


        $('#update_idcon').val(data[0]);
        $('#namecon11').val(data[1]);
        $('#hostcon11').val(data[2]);
        $('#sdeccon11').val(data[3]);
        $('#datetimecon11').val(data[4]);
        $('#placecon11').val(data[5]);
        $('#typecon11').val(data[6]);
        $('#mediumcon11').val(data[7]);
        $('#linkcon11').val(data[8]);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttonuser').on('click', function() {
        $('#editmodaluser').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();


        $('#update_iduser').val(data[0]);
        $('#usernameed').val(data[1]);
        $('#mobiled').val(data[2]);
        $('#emailed').val(data[4]);
        $('#addressed').val(data[3]);
        $('#amounted').val(data[6]);
        $('#paidus').val(data[7]);
        $('#deli').val(data[8]);
       
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttoncat').on('click', function() {
        $('#editmodalcat').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();


        $('#update_idcat').val(data[0]);
        $('#catnamee').val(data[1]);
        $('#catdesce').val(data[2]);
        $('#cattypee').val(data[3]);

      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.editbuttonknow').on('click', function() {
        $('#editmodalknow').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();


        $('#update_idknow').val(data[0]);
        $('#nameknow11').val(data[1]);
        $('#sdecknow11').val(data[2]);
        $('#typeknow11').val(data[3]);
        $('#linkknow11').val(data[4]);



      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#userInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table-user tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#resourceInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table-resource tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#conferenceInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table-conference tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#categoryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table-category tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

    });
  </script>
</body>

</html>