<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>대외 활동 글 생성</title>
  </head>
  <body>
    <h1><a href="/webproject/activity/activity.php">대외 활동</a></h1>

    <a href="/webproject/activity/activitycreate.php">대외 활동 글 생성</a>
    <form action="/webproject/activity/activitycreate_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>
