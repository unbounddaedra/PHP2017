<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="upload.php" method="POST"> <!-- without this you cannot upload files -->
            
            Browse to a File on your PC (or Mac, I guess) to upload: <br /> <br /> <input name="upfile" type="file" />
            <input type="submit" value="Send" />
        </form>

        <!-- display imaged
        <img src="uploads/img_30420d1a9afb2bcb60335812569af4435a59ce17.jpg" /> -->
    </body>
</html>