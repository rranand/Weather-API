<?php
session_start();
include("../php/classes.php");
include("../php/db.php");
error_reporting(0);
?>
<?php
    if (!isset($_SESSION['ad_username'])) {
        ?>
            <script>
                window.location = "index.php";
            </script>
            <?php
    } else {
        $search = $_GET['search'];
        $acc = $_GET['acc'];
        if (isset($acc)) {
            $acc = (int)$acc;
        } else {
            $acc = 2;
        }
        $db = new database();
        $log = new admin_profile($db->Connect());
        if (isset($search)) {
            $data = json_decode($log->searchTable($search, $acc), true);
        } else {
            $data = json_decode($log->fortable(), true);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="asset/img/apple-icon.png">
  <link rel="icon" type="image/png" href="asset/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WeatherAPI
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="asset/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="asset/img/sidebar-1.jpg">

      <div class="logo"><a href="../index.php" class="simple-text logo-normal">
          WeatherAPI Admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item active">
            <a class="nav-link" href="tables.php">
              <i class="material-icons">content_paste</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <i class="material-icons">person</i>
              <p>Contact</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">person</i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <form class="search-form">
                <input class="search" type="search" placeholder="Search by username, email, name..." name="search" <?php
                 if (strlen($search)>0) {
                    ?> value = "<?php echo $search;?>" <?php
                 }
                 ?> >
                <select class="opt" name="acc">
                    <option value="2" <?php if ($acc==2) {?> selected <?php } ?> >All Users</option>
                    <option value="0" <?php if ($acc==0) {?> selected <?php } ?> >Free Users</option>
                    <option value="1" <?php if ($acc==1) {?> selected <?php } ?> >Premium Users</option>
                </select>
                <button class="btn st" type="submit">Search</button>
            </form>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of All Users</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">

                  <?php
                    if (count($data)>0) {
                    ?>
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Calls
                        </th>
                      </thead>
                      <tbody>
                        <?php
                            for($i=0; $i < count($data); ++$i) {
                        ?>
                            <tr>
                              <td>
                              <?php echo $data[$i]['name'];?>
                              </td>
                              <td>
                                <a href="user.php?username=<?php echo $data[$i]['username'];?>">
                                <?php echo $data[$i]['username'];?>
                                </a>
                              </td>
                              <td>
                                <?php echo $data[$i]['email'];?>
                              </td>
                              <td>
                                <?php
                                    if ($data[$i]['type']==1) {
                                        echo 'Premium';
                                    } else {
                                        echo 'Free';
                                    }
                                ?>
                              </td>
                              <td>
                              <?php
                                    if ($data[$i]['type']==1) {
                                        echo 'Unlimited';
                                    } else {
                                        echo 60-$data[$i]['calls'];
                                        echo '/60';
                                    }
                              ?>
                              </td>
                            </tr>
                            <?php
                         }
                        ?>

                      </tbody>
                    </table>
                    <?php
                        } elseif (isset($search)) {
                            ?>
                                <h2 align="center"> No users found!!! </h2>
                            <?php
                        } else {
                            ?>
                                <h2 align="center"> No users found!!! </h2>
                            <?php
                        }
                     ?>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>

  <script src="asset/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>
</html>