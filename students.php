<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>E-Classe | Students</title>
  </head>
  <body class=" overflow-hidden d-flex">
      <?php // IDEA: sidebar ?>
      <?php include 'php/sidebar.php'; ?>
      <?php // IDEA: navbar ?>
      <div class="flex-column w-100">
        <?php include 'php/navbar.php'; ?>
        <!-- IDEA: content-nav -->
        <div class="mx-5 my-3 d-flex justify-content-between  ">
          <h2 class="fs-2 m-0">Student list</h2>
          <div>
            <a href="#"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
            </svg></a>
            <button class="btn btn-primary" name="button">ADD NEW STUDENT</button>
          </div>
        </div>
        <!-- IDEA: content -->
        <div class="mx-5 my-5">
          <div class="my-3 shadow-sm rounded shadow-4 rounded-5 overflow-auto">
            <table class="table align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th></th>
                  <th class="py-3 px-3">Name</th>
                  <th class="py-3">Email</th>
                  <th class="py-3">Phone</th>
                  <th class="py-3">Enroll Number</th>
                  <th class="py-3">Date of admission</th>
                  <th class="py-3">&nbsp;</th>
                  <th class="py-3">&nbsp;</th>
                  <th class="py-3">&nbsp;</th>
                </tr>
              </thead>

              <div class="my-2">
                <tbody>
                  <?php $std_list = array(
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021"),
                    array("image"=>"./imgs/placeholder.png", "name"=>"Username", "email"=>"your@email.xyz", "phone"=>"7305477760", "enroll"=>"1234567305477760", "date"=>"08-Dec,2021")
                  );
                  foreach ($std_list as $std) {
                    echo '<tr>';
                    echo '<td><img src="./imgs/placeholder.png" width="50px" alt=""></td>';
                    echo '<td>Username</td>';
                    echo '<td>your@email.xyz</td>';
                    echo '<td>7305477760</td>';
                    echo '<td>1234567305477760</td>';
                    echo '<td class="py-4 px-3 rounded">08-Dec,2021</td>';
                    echo '<td class="py-4 px-3 rounded">08-Dec,2021</td>
                    <td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg></a> </td>';
                    echo '<td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a></td>';
                  };
                   ?>
               </tbody>
              </div>
            </table>

          </div>

        </div>
      </div>


















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      @media screen and (max-width:1022px) {
        .vh-100.side_bar{
          display:none !important;
        }
      }
    </style>
  </body>
</html>
