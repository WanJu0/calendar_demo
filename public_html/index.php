<?php include('header.php')?>
<?php include('data.php')?>


<div id="calendar">
    <div id="header">
        <?= date('Y')?>/<?= date('m')?>
    </div> 

    <div id="days" class="clearfix">
       <div class="day">SUN</div>
       <div class="day">MON</div>
       <div class="day">TUE</div>
       <div class="day">WED</div>
       <div class="day">THU</div>
       <div class="day">FRI</div>
       <div class="day">SAT</div>
    </div>

    <div id="dates" class="clearfix">
        <?php foreach ($dates as $keys =>$date ):?>
        <div class="date-block <?= (is_null($date))? 'empty' :''?>">
            <div class="date"><?= $date ?></div>
            <div class="events">  
                <div class="event clearfix">
                    <div class="title">title</div>
                    <div class="from">10:00</div>
                </div>
            </div>
    </div>
    <?php endforeach ?>
    </div>
</div>

<div id="info-panel" class="update">
    <div class="close">x</div>
    <div class="title">
        <label>event</label>
        <div contenteditable="true"></div>
    </div>
   
    <div class="time-picker">
        <div class="selected-date">
            <span class="month">10</span>
            /<span class="date">20</span>
        </div>
        <div class="from">
            <label for="from">from</label><br>
            <input type="time" name="start_time" id="from">
        </div>
        <div class="to">
            <label for="to">to</label><br>
            <input type="time" name="end_time" id="to">

        </div>
    </div>
    <div class="description">
        <label>description</label><br>
        <textarea name="description" id="description"></textarea>

    </div>
    <div class="buttons clearfix">
        <button class="create">create</button>
        <button class="update">update</button>
        <button class="cancel">cancel</button>
        <button class="delete">delete</button>
    </div>
</div>

<?php include ('footer.php') ?>