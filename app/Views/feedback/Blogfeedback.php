<!-- Contents -->
<div class="row body">
    <!-- Left Side -->
    <div class="col-lg-4 left-side-content">
        <div class="row">
            <div class="col-md-12 left-side-title">
                <h5> MARY'S BIO </h5>
            </div>
        </div>
        <div class="row left-side-links">
            <ul>
                <li><a href="/feedback">Send Feedback</a></li>
                <li><a href="/allfeedback">View All Feedback</a></li>
            </ul>
        </div>
    </div>

    <!-- Right Side -->
    <div class="col-lg-8 col-md-12 right-side-content">
        <div class="row">
            <div class="col-md-12 mt-2" style="margin:auto">
                <h5>FEEDBACK</h5>
            </div>
            <ul>
                <div class="col-md-12">
                    <?php if ($feedback) : ?>
                        <?php foreach ($feedback as $feedbacks) : ?>
                            <li><strong><?php echo $feedbacks['username']; ?></strong> : <?php echo $feedbacks['feedback']; ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </ul>
        </div>
    </div>
</div>