<?php
/** @var $exception Exception */
?>


<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Oops! An error occurred.</h1>
        <p class="lead">Error Code: <?php echo $exception->getCode() ?></p>
        <hr class="my-4">
        <p><?php echo $exception->getMessage() ?></p>
        <a href="#" id="goBackButton" class="btn btn-primary mt-4">Go Back</a>
    </div>
</div>

<script>
    document.getElementById("goBackButton").addEventListener("click", function(event) {
        event.preventDefault();
        window.history.back();
    });
</script>