<html>
  <head>
    <title>Tiny Urls</title>
  </head>
  <body>
    <div>
      <div><h1>Tiny Urls</h1></div>
      <div>
        <form method="post" action="/">
          <label for="source_url">Source url</label> 
          <input name="source_url" />

          <label for="key">Key</label>
          <div><span>https://tinyurls.com/</span><input placeholder="key" name="key" />
          <button type="submit">Create</button>
        </form>
    </div>
  </body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo "posted";
}
