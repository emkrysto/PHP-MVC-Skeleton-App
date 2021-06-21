<h4><?= $this->title; ?></h4>

<form action="#" method="post">

    <div class="container">
    <label for="uname"><b><?= $this->user; ?></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br />
    <label for="pass"><b><?= $this->pass; ?></b></label>
    <input type="text" placeholder="Enter Username" name="pass" required>
    <br />
    <button type="submit">Login</button>
  </div>
</form>