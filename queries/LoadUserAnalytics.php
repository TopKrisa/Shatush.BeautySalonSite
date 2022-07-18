<div class="insights">

    <?php
    $orders =  \R::count('orders');
    $sale = 0;
    if ($orders >= 30) {
        $sale = 5;
    } else if ($orders >= 50) {
        $sale = 10;
    } else if ($orders >= 100) {
        $sale = 15;
    }
    $messages  = \R::count('messages');
    echo '  <div class="sales">
<span class="material-icons-sharp"> analytics   </span>
<div class="middle">
    <div class="left">
        <h3>Всего заявок</h3>
        <h1>' . $orders . '</h1>
    </div>
<div class="progress">
 
</div>
</div>
<small class="text-muted">
    За все всремя
</small>

</div>
<!-- End of sales -->
<div class="income">
<span class="material-icons-sharp"> stacked_line_chart   </span>
<div class="middle">
    <div class="left">
        <h3>Ваша скидка</h3>
        <h1>' . $sale . ' %</h1>
    </div>
<div class="progress">
   
    
</div>
</div>
<small class="text-muted">
    За все время
</small>

</div>
<!-- End of expenses -->
<div class="expenses">
<span class="material-icons-sharp"> mail   </span>
<div class="middle">
    <div class="left">
        <h3>Всего сообщений</h3>
        <h1>' . $messages . '</h1>
    </div>
<div class="progress">
  
</div>
</div>
<small class="text-muted">
    За все время
</small>

</div>';   ?></div>