<div class="col-6 d-flex align-items-stretch">
    <div class="card">
        <div class="card-body" style="text-align:center">
            <img src="public/images/1.<?php echo $i ?>.png" alt="" style="width: 90%">
            <h5>Morden Bag</h5>
            <div class="rate_rank">
                <?php $rate = rand(3, 5);
                for ($j = 1; $j <= $rate; $j++) {
                    ?>
                    <i class="fas fa-star active_rate"></i>
                    <?php
                }
                for ($j = 1; $j <= 5 - $rate; $j++) {
                    ?>
                    <i class="fas fa-star disactive_rate"></i>
                    <?php
                }
                ?>
            </div>
            <div>
                $<?php echo rand(25,35); ?>
            </div>
            <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
    </div>
</div>