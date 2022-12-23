<nav class="
  relative
  w-full
  flex flex-row
  items-center
  justify-between
  py-4
  bg-gray-100
  text-gray-500
  hover:text-gray-700
  focus:text-gray-700
  shadow-lg
  navbar navbar-expand-lg navbar-light">
  <div class=" items-center relative">
    <ul class= "flex flex-row space-x-4">
    <li> <a  href="/">Home</a></li>
        <?php if (!empty($_SESSION['user']['loggedIn'])) { ?>
            <li><a  href="/logout">Logout</a></li>
            <li><a  href="/profil">Profil</a></li>
        <?php } else { ?>
            <li><a href="/login">Login</a></li>
            <li><a href="/registration">Registration</a></li>
        <?php } ?>
    </ul>
        </div>
</nav>