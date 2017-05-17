<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <p>I like <?= $color ?></p>
        <p><?= 2 * 3.14 *  $radius ?></p>
        
        <!-- looping over arrays -->
        <h3>Bookmarks</h3>
        <p>My first bookmark is <?= $bookmarks[0] ?></p>
        <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
            <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li>
        <?php endforeach; ?>
        </ul>
        
        <!– an associative array -->
        <h3>Addresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p> 
        
        <div class="container-fluid">
            <div class="row">
              <h6><strong>Out-door Interests</strong></h6>
              
                <?php foreach (($desserts?:[]) as $key=>$dessert): ?>
                   <div class="col-sm-3">
                        <label class="checkbox-inline"><input type="checkbox" name="interestsOutdoor[]" value="<?= $key ?>"> <?= $dessert ?></label>
                    </div>
                <?php endforeach; ?>
              
            </div>
        </div>
        
        
    </body>
</html>












