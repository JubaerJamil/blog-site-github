<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Create Your Post</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="post.php">Post</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container pt-2">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2>Please Create Your Post</h2>
          <form action="index.php" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Create Your Post Title</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Create Your Post Title">
              <div class="mb-3 mt-3">
                <label for="exampleFormControlTextarea1" class="form-label">Write Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3 mt-3">
                <label for="exampleFormControlTextarea1" class="form-label">Author Name</label>
                <br>
                <input type="text" name="author" class="form-control" placeholder="Write Author Name">
              </div>
              <div class="mb-3 mt-3">
                <label for="exampleFormControlTextarea1" class="form-label">Choose Image</label>
                <br>
                <input type="file" name="file" class="form-control">
              </div>
              <div class="mb-3 mt-3">
                <input type="submit" value="POST" class="form-control bg-info" >
              </div>
            </div>
          </form>
        </div>
        
      </div>
      
    </div>
    
  </div>
</body>
</html>