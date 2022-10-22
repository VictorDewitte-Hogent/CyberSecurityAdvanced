<!DOCTYPE html>​
<html>​
<head>​
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">​
<link rel="stylesheet" href="./assets/css/screen.css">
</head>​
<body>​
<div style="padding-left:16px">​
  <h2>Howest Search Engine</h2>​
  <p>Search by words or by image</p>​
  <p>Write inside the search box and a submit by click on the button.</p>​
  <div class="search-container">​
    <form action="/action_page.php">​
      <input type="text" placeholder="Search.." name="searchString">​
      <button type="submit"><i class="fa fa-search"></i></button>​
    </form>​
 <form action="upload.php" method="post" enctype="multipart/form-data">​
  <p>First select an image to upload, then click on the "Upload Image" button to upload an image:​
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">​
  </p>​
</form>​
  </div>​
</div>​
​</body>​
</html>
