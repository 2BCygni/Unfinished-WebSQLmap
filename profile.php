<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 08:51:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
</head>
<?php
include('config/db.php');
session_start();
?>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="index.html"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">Túpac Amaru</div>
                    <div class="user-position online">Available</div>
                  </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
            <div class="page-title"><span>Blank Page</span></div>
            <ul class="nav navbar-nav float-right be-icons-nav">
              <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                    <div class="list">
                      <div class="be-scroller-notifications">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="index2.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li><a href="test.php"><i class="icon mdi mdi-dot-circle"></i><span>Launch a test</span></a>
                  </li>
                  <li class="active"><a href="profile.php"><i class="icon mdi mdi-layers"></i><span>Profiles</span></a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Create a profile<span class="card-subtitle">To hack faster!</span></div>
                <div class="card-body">
                  <form action="profile.php?action=create" method="post">
                    <?php
                      if(isset($_GET['action'])) {
                        if($_GET['action'] ==="create") {
                          if(isset($_POST['name'], $_POST['description'], $_POST['risk'], $_POST['level'], $_POST['argv'])) {
                          $query=$db->prepare("INSERT into preset (name, description, risk, level, argv, createdate) VALUES (:name, :description, :risk, :level, :argv, :createdate)");
                          $query->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
                          $query->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
                          $query->bindValue(':risk', $_POST['risk'], PDO::PARAM_STR);
                          $query->bindValue(':level', $_POST['level'], PDO::PARAM_STR);
                          $query->bindValue(':argv', $_POST['argv'], PDO::PARAM_STR);
                          $query->bindValue(':createdate', date("Y-m-d H:i:s"), PDO::PARAM_STR);
                          $query->execute();  // date("Y-m-d H:i:s")
                          echo "<div class=\"alert alert-contrast alert-success alert-dismissible\" role=\"alert\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><div class=\"message\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span class=\"mdi mdi-close\" aria-hidden=\"true\"></span></button><strong>Good!</strong> A new profile has been created !</div></div>";
                          }

                        } elseif($_GET['action'] === "delete" && isset($_GET['profile'])) {
                            $query=$db->prepare("DELETE FROM preset WHERE name='" . htmlspecialchars($_GET['profile']) . "';");
                            $query->execute();
                            echo "<div class=\"alert alert-contrast alert-success alert-dismissible\" role=\"alert\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><div class=\"message\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span class=\"mdi mdi-close\" aria-hidden=\"true\"></span></button><strong>Good!</strong> The profile has been deleted !</div></div>";
                        
                        } elseif($_GET['action'] === "edit" && isset($_GET['profile'])) {
                          echo "<div class=\"alert alert-contrast alert-warning alert-dismissible\" role=\"alert\"><div class=\"icon\"><span class=\"mdi mdi-alert-triangle\"></span></div><div class=\"message\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span class=\"mdi mdi-close\" aria-hidden=\"true\"></span></button><strong>Warning!</strong> You are editing a profile, if you leave this page without Submitting the request, no profile will be created.</div></div>";
                          $query=$db->prepare("SELECT * FROM preset WHERE name=:name");
                          $query->bindValue(':name', htmlspecialchars($_GET['profile']), PDO::PARAM_STR);
                          $query->execute();
                          $data=$query->fetch();

                          $edit=$db->prepare("INSERT into preset (name, description, risk, level, argv, createdate) VALUES (:name, :description, :risk, :level, :argv, :createdate)");
                          $edit->bindValue(':name', $data['name'], PDO::PARAM_STR);
                          $edit->bindValue(':description', $data['description'], PDO::PARAM_STR);
                          $edit->bindValue(':risk', $data['risk'], PDO::PARAM_STR);
                          $edit->bindValue(':level', $data['level'], PDO::PARAM_STR);
                          $edit->bindValue(':argv', $data['argv'], PDO::PARAM_STR);
                          $edit->bindValue(':createdate', date("Y-m-d H:i:s"), PDO::PARAM_STR);
                          $edit->execute();  // date("Y-m-d H:i:s")

                          $delete=$db->prepare("DELETE FROM preset WHERE name='" . htmlspecialchars($_GET['profile']) . "';");
                          $delete->execute();
                        } else {
                          echo "<div class=\"alert alert-contrast alert-warning alert-dismissible\" role=\"alert\"><div class=\"icon\"><span class=\"mdi mdi-alert-triangle\"></span></div><div class=\"message\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span class=\"mdi mdi-close\" aria-hidden=\"true\"></span></button><strong>Warning!</strong> No profile was deleted because a parameter was missing.</div></div>";
                        }

                      } elseif(isset($_GET['action'])) {
                          if($_GET['action'] ==="create") {
                            echo "<div class=\"alert alert-contrast alert-warning alert-dismissible\" role=\"alert\"><div class=\"icon\"><span class=\"mdi mdi-alert-triangle\"></span></div><div class=\"message\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span class=\"mdi mdi-close\" aria-hidden=\"true\"></span></button><strong>Warning!</strong> No profile was created because a parameter was missing.</div></div>";
                          }
                      }
?>


                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" name="name" placeholder="Name" value="<?php if(isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['profile'])) { echo htmlspecialchars($_GET['profile']); } ?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" name="description" placeholder="Description" value="<?php if(isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['profile'])) { echo $data['description']; } ?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Risk</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" name="risk" data-parsley-max="3" placeholder="Max value is 3" value="<?php if(isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['profile'])) { echo $data['risk']; } ?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Level</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" name="level" data-parsley-max="5" placeholder="Max value is 5" value="<?php if(isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['profile'])) { echo $data['level']; } ?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Additional arguments</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" name="argv" placeholder="ex : --proxy, --data, --cookie" value="<?php if(isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['profile'])) { echo $data['argv']; } ?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button class="btn btn-space btn-primary" type="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:37%;">Name</th>
                        <th style="width:36%;">Description</th>
                        <th>Creation date</th>
                        <th class="actions"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM preset";
                      $result = mysqli_query($con, $sql);
                      $datas = array();
                      if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                          $datas[] = $row;
                        }
                      }
                      //print_r($datas);
                      foreach ($datas as $data) {
                        echo "<tr><td class=\"user-avatar\"> <img src=\"assets/img/avatar6.png\" alt=\"Avatar\">" . $data['name'] . "</td><td>" . $data['description'] . "</td><td>" . $data['createdate'] . "</td><td class=\"actions\"><a class=\"icon\" href=\"profile.php?action=edit&profile=" . $data['name'] . "\"><i class=\"mdi mdi-settings\"></i></a>&nbsp;&nbsp;&nbsp;<a class=\"icon\" href=\"profile.php?action=delete&profile=" . $data['name'] . "\"><i class=\"mdi mdi-delete\"></i></a></td>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller-chat">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller-messages">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller-todo">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" checked=""><span class="custom-control-label">Initialize the project</span>
                            </label>
                          </li>
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Create the main structure							</span>
                            </label>
                          </li>
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Updates changes to GitHub							</span>
                            </label>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Initialize the project							</span>
                            </label>
                          </li>
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Create the main structure							</span>
                            </label>
                          </li>
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Updates changes to GitHub							</span>
                            </label>
                          </li>
                          <li>
                            <label class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!							</span>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                <div class="settings-wrapper">
                  <div class="be-scroller-settings"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 08:51:25 GMT -->
</html>