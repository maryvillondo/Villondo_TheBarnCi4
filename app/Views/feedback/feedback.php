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
        <div class="row mb-3">
            <div class="col-md-12 right-side-paragraph">
                <h5>Send Feedback</h5>
                <form class="" action="/add-userfeedback" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?= set_value('username') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea type="textarea" class="form-control" placeholder="Feedback" name="feedback" id="feedback" rows="4" value="<?= set_value('feedback') ?>"></textarea>
                    </div>
                    <div>
                        <?php if (isset($validation)) : ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>