<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
  <meta name="author" content="AdminKit" />
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="shortcut icon" href="src/img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/" />

  <title>Project Timeline IT SOEKANDAR</title>

  <link href="src/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="src/js/bootstrap.bundle.min.js"></script> -->
  <script src="src/js/jquery-3.6.0.min.js"></script>
  <link href="src/css/app.css" rel="stylesheet" />
  <link href="src/css/css2.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
          <span class="align-middle">Project Timeline</span>
        </a>

        <ul class="sidebar-nav" id="listmenu">
          <li class="sidebar-header">

            <div class="row">
              <div class="col mt-0">
                Pages
              </div>
              <div class="col-auto">
                <button class="btn btn-primary btn-sm" onclick="addproject()"><i class="align-middle" data-feather="file-plus"></i> add project</button>
              </div>
            </div>
          </li>
        </ul>

        <div class="sidebar-cta">
          <div class="sidebar-cta-content">
            <strong class="d-inline-block mb-2">Kamu ngapain ?</strong>
            <div class="mb-3 text-sm">
              Kerja Kerja Kerja
            </div>
            <div class="d-grid">
              <a href="#" class="btn btn-primary">Ingat Ya!!!</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="bell"></i>
                  <span class="indicator">4</span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">4 New Notifications</div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-danger" data-feather="alert-circle"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Update completed</div>
                        <div class="text-muted small mt-1">
                          Restart server 12 to complete the update.
                        </div>
                        <div class="text-muted small mt-1">30m ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-warning" data-feather="bell"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Lorem ipsum</div>
                        <div class="text-muted small mt-1">
                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                        </div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-primary" data-feather="home"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">Login from 192.186.1.8</div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-success" data-feather="user-plus"></i>
                      </div>
                      <div class="col-10">
                        <div class="text-dark">New connection</div>
                        <div class="text-muted small mt-1">
                          Christina accepted your request.
                        </div>
                        <div class="text-muted small mt-1">14h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a href="#" class="text-muted">Show all notifications</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="message-square"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                <div class="dropdown-menu-header">
                  <div class="position-relative">4 New Messages</div>
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="src/img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" />
                      </div>
                      <div class="col-10 ps-2">
                        <div class="text-dark">Vanessa Tucker</div>
                        <div class="text-muted small mt-1">
                          Nam pretium turpis et arcu. Duis arcu tortor.
                        </div>
                        <div class="text-muted small mt-1">15m ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="src/img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris" />
                      </div>
                      <div class="col-10 ps-2">
                        <div class="text-dark">William Harris</div>
                        <div class="text-muted small mt-1">
                          Curabitur ligula sapien euismod vitae.
                        </div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="src/img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason" />
                      </div>
                      <div class="col-10 ps-2">
                        <div class="text-dark">Christina Mason</div>
                        <div class="text-muted small mt-1">
                          Pellentesque auctor neque nec urna.
                        </div>
                        <div class="text-muted small mt-1">4h ago</div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img src="src/img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman" />
                      </div>
                      <div class="col-10 ps-2">
                        <div class="text-dark">Sharon Lessman</div>
                        <div class="text-muted small mt-1">
                          Aenean tellus metus, bibendum sed, posuere ac,
                          mattis non.
                        </div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a href="#" class="text-muted">Show all messages</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="src/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                <span class="text-dark">Charles Hall</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i>
                  Profile</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                  Analytics</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i>
                  Settings & Privacy</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                  Help Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <main class="content">
        <div class="container-fluid p-0">

          <script>
            $(document).ready(function() {
              getlistproject()
            })

            function getlistproject(e) {
              $.ajax({
                url: 'getlistproject.php',
                dataType: "json",
                success: function(data) {
                  $(".sidebar-item").remove()
                  $("#listmenu").append(data)
                },
                error: function(e) {
                  alert('Error: ' + e)
                }
              })
            }

            function getlistfeature(e) {
              // console.log(e)
              if ($.isNumeric(e)) {
                idproject = e
              } else {
                idproject = $(e).data("id")
                $('h1 span').html($(e).data("name"))
              }

              $.ajax({
                url: 'getlistfeature.php',
                data: {
                  id: idproject
                },
                type: "POST",
                dataType: "json",
                success: function(data) {
                  $("#feature").show()
                  $("#tabel-feature").html("")
                  $("#tabel-feature").append(data)
                  $('#projectid').val(idproject)
                },
                error: function(e) {
                  alert('Error: ' + e)
                }
              })
            }

            function addproject() {
              $('#ModalProject .modal-title').html('Add Project')
              $('#formproject').trigger("reset")
              $('#btnprojectadd').show()
              $('#btnprojectedit').hide()

              $('#ModalProject').modal('show')
            }

            function saveaddproject() {
              $.ajax({
                url: 'insert.php',
                data: {
                  projectname: $('#projectname').val()
                },
                type: "POST",
                dataType: "json",
                success: function(data) {
                  console.log(data)
                  if (data == true) {
                    $('#ModalProject').modal('hide')
                    getlistproject()
                  }
                },
                error: function(e) {
                  alert('Error: ' + e)
                }
              })
            }

            function editproject(parr) {
              // console.log(idproject)
              data = parr.split('|')
              $('#ModalProject .modal-title').html('Edit Project')
              $('#formproject').trigger("reset")
              $('#btnprojectadd').hide()
              $('#btnprojectedit').show()

              $('#projectname').val(data[1])
              $('#idproject').val(data[0])

              $('#ModalProject').modal('show')
            }

            function saveeditproject() {
              $.ajax({
                url: 'update.php',
                data: {
                  idproject: $('#idproject').val(),
                  projectname: $('#projectname').val()
                },
                type: "POST",
                dataType: "json",
                success: function(data) {
                  console.log(data)
                  if (data == true) {
                    $('#ModalProject').modal('hide')
                    getlistproject()
                  }
                },
                error: function(e) {
                  alert('Error: ' + e)
                }
              })
            }
          </script>

          <div class="modal" id="ModalProject" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Project</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" id="formproject">
                    <input type="text" name="projectname" id="projectname" class="form-control" placeholder="Project Name">
                    <input type="hidden" name="idproject" id="idproject">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="btnprojectadd" class="btn btn-primary" onclick="saveaddproject()">Save</button>
                  <button type="button" id="btnprojectedit" class="btn btn-warning" onclick="saveeditproject()" style='display:none;'>Save Change</button>
                </div>
              </div>
            </div>
          </div>