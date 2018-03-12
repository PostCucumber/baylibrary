<?php
use Includes\Modules\Events\Events;
$event = this.$event;
?>


<a class="button is-rounded is-primary is-outlined"
   href="<?= $event['tickets']; ?>"
>
    Purchase Tickets
</a>
<a href="<?= $event['link']; ?>">
    <img src="'<?= $event["photo"]; ?>'">
</a>
<a href="#" target="_blank" class="facebook">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.02 34.02" style="height: 2.3rem;">
        <path fill="#43609C"
                d="M17,34A17,17,0,1,0,0,17,17,17,0,0,0,17,34"
                class="container"></path>
        <path fill="#FFF"
                d="M12.9,14.13h1.76V12.42a4.57,4.57,0,0,1,.57-2.64A3.13,3.13,0,0,1,18,8.5a11.05,11.05,0,0,1,3.15.32l-.44,2.6a5.94,5.94,0,0,0-1.42-.21c-.68,0-1.3.25-1.3.93v2h2.8l-.2,2.54H18v8.84h-3.3V16.67H12.9Z"
                class="icon"></path>
    </svg>
</a>