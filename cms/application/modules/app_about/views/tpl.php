<!-- Page Content -->
<div class="md-card" data-uk-grid-margin>
    <div class="md-card-content">
        <h3 class="heading_a">About Page</h3>
        <hr/>
        <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
            <li class="<?=($this->uri->segment(2)==='')?'uk-active':''?>"><a href="#">MI</a></li>
        </ul>
        <ul id="tabs_anim1" class="uk-switcher uk-margin">
            <li>
                <!-- OUTPUT MESSAGE -->
                <?= $this->messagecontroll->showMessage() ?>
                    <!-- OUTPUT MESSAGE -->
                    <?php if( $this->initial_template == '' ): ?>
                    <form action="<?= base_url('app_about') ?>" method="post" enctype="multipart/form-data">
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <textarea cols="30" rows="4" class="md-input" name="about_desc">
                                        <?= $mi['about_desc'] ?>
                                    </textarea>
                                    <label for="task_title">Masukan Link</label>
                                    <input type="text" class="md-input" id="event_name"  name="link" value="<?php echo $mi['link']; ?>" />
                                    <p>Contoh: https://www.youtube.com/watch?<strong>v=R-91zBrXJaU</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                            <div class="uk-input-group">
                                <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                                <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
            </li>
            <li>
                    <?php if( $this->initial_template == '' || $this->initial_template == 'officers' ): ?>
                      <form action="<?= base_url('app_about/mts') ?>" method="post" enctype="multipart/form-data">
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <textarea cols="30" rows="4" class="md-input" name="about_desc">
                                        <?= $mts['about_desc'] ?>
                                    </textarea>
                                    <label for="task_title">Masukan Link</label>
                                    <input type="text" class="md-input" id="event_name"  name="link" value="<?php echo $mts['link']; ?>" />
                                    <p>Contoh: https://www.youtube.com/watch?<strong>v=R-91zBrXJaU</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                            <div class="uk-input-group">
                                <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                                <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>                   
            </li>
            <li>
                    <?php if( $this->initial_template == '' || $this->initial_template == 'sponsors' ): ?>
                    <form action="<?= base_url('app_about/smk') ?>" method="post" enctype="multipart/form-data">
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <textarea cols="30" rows="4" class="md-input" name="about_desc">
                                        <?= $smk['about_desc'] ?>
                                    </textarea>
                                    <label for="task_title">Masukan Link</label>
                                    <input type="text" class="md-input" id="event_name"  name="link" value="<?php echo $smk['link']; ?>" />
                                    <p>Contoh: https://www.youtube.com/watch?<strong>v=R-91zBrXJaU</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                            <div class="uk-input-group">
                                <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                                <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>              
            </li>
        </ul>
    </div>
</div>
<!-- End Container -->
