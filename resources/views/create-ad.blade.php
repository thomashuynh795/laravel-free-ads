<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ad Creation</title>
    </head>
    <body>
        <div class="form">
            <form method="POST" action="../controler/connection.php">

            <h1>Create you ad</h1>

                <!-- title -->
                <div class="field">
                    <div class="field-name">Title</div>
                    <input type="text" name="title" class="field-input" required>
                </div>

                <!-- description -->
                <div class="field">
                    <div class="fiel-name">Description</div>
                    <input type="password" name="description" class="field-input" required>
                </div>

                <!-- picture -->
                <div class="field">
                    <div draggable="true" class="fiel-name">Picture</div>
                    <input type="password" name="picture" class="field-input" required>
                </div>

                <!-- Price -->
                <div class="field">
                    <div class="fiel-name">Price</div>
                    <input type="password" name="price" class="field-input" required>
                </div>

                <div class="continue"><button type="submit" name="continue">Continue</button></div>
            </form>
        </div>
    </body>
</html>