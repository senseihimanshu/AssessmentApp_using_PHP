<div class="form-group">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="email"><?php echo $viewmodel.QUESTION ?></label>
            <input id="email" type="email" name="email" class="form-control" placeholder="Enter E-Mail" />
        </div>

        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="/php.dev">Cancel</a>
        
        <!-- <?php foreach($viewmodel as $item) : ?>
            <div class="well">
                <h3><?php echo $item['title']; ?></h3>
                <small><?php echo $item['create_date']; ?></small>
                <hr />
                <p><?php echo $item['body']; ?></p>
                <br />
                <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
            </div>
        <?php endforeach; ?> -->
        
        
        <!-- <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Default radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Second default radio
            </label>
        </div> -->
    </form>
</div>