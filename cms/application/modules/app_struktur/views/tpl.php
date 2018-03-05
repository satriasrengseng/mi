<span>&nbsp;</span>
<span>&nbsp;</span>
<span>&nbsp;</span>
<span>&nbsp;</span>


<div class="md-card">
    <div class="md-card-content">
        <div class="uk-overflow-container uk-margin-bottom">
            <h3 class="heading_e">Jadwal</h3>
            <!-- OUTPUT MESSAGE -->
            <?= $this->messagecontroll->showMessage() ?>
                <!-- OUTPUT MESSAGE -->
                <?php if( $this->initial_template == '' ): ?>
                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
                        <thead>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Struktur Organisasi</th>
                                <th>Jenjang</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Struktur Organisasi</th>
                                <th>Jenjang</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php 
                        if( count($kalender) > 0 ){
                            foreach($kalender as $row){                         
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['struktur_id'].'</span></td>
                                        <td><img src="'.$row['file'].'"></td>
                                        <td>
                                            <a href="'.base_url($this->app_name).'/edit/'.$row['struktur_id'].'">'.$row['jenjang'].'</a>
                                        </td>
                                        ';
                                        // if($row['status'] == 'Soon') {
                                        //  echo '<td><span class="uk-badge uk-badge-info">'.$row['status'].'</span></td>';                                           
                                        // }else{
                                        // echo '<td><span class="uk-badge uk-badge-success">'.$row['status'].'</span></td>';
                                        // }
                                    echo '</tr>';
                            }}else{
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                        <td><span class="uk-text-danger">Tidak ada kalender</span></td>
                                        <td></td>                                        
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
        </div>
        <?php elseif( $this->initial_template == 'add' ): ?>
            <form action="<?= base_url('app_kalender/add') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Jenjang</label>
                    <select class="uk-form-width-medium" data-md-selectize-inline name="jenjang_id" required>
                        <option value="">Pilih Jenjang</option>
                        <?php foreach ($jenjang as $k): ?>
                            <option value="<?php echo $k['jenjang_id']; ?>"><?php echo $k['jenjang']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br/>

                <div class="md-card-content">
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-2">
                        <h5 class="heading_e">
                            Cover Photo (Jadwal)<br />
                            Min. Size (607 x 501 px)
                        </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <hr> 
                <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                    <div class="uk-input-group">
                        <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                        <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                    </div>
                </div>
            </form>
        <?php else: ?>
            <form action="<?= base_url( $this->app_name ).'/edit/'.$this->initial_id ?>" method="post" class="uk-form-stacked" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Jenjang</label>
                    <select class="uk-form-width-medium" data-md-selectize-inline name="jenjang_id" required>
                    <option value="">Pilih Jenjang</option>
                    <?php foreach ($kelas as $k): ?>
                    <option value="<?php echo $k['jenjang_id'];?>" <?php if ($k['jenjang_id'] == $datadb['jenjang_id']) {echo "selected";} ?>><?php echo $k['jenjang'];?></option>
                    <?php endforeach ?>
            </select>
                </div>
                <br/>
                    <div class="md-card-content">
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-2">
                            <h5 class="heading_e">
                                Cover Photo (Event)<br />
                                Min. Size (607 x 501 px)
                            </h5>
                                <div align="center">
                                    <?php
                                        // if( file_exists( getThumbnailsImage($datadb['file2'], $datadb['extension2']) ) ){
                                        //     echo '<img src="'.base_url().getThumbnailsImage($datadb['file2'], $datadb['extension2']).'"/>';
                                        // }else{
                                        //     echo '<img src="http://placehold.it/607x501"/>';
                                        // }
                                    if ($datadb['file']) {?>
                                    <img src="<?php echo base_url().$datadb['file']; ?>">    
                                    <?php }else{ ?>
                                    <img src="http://lorempixel.com/607/501">
                                    <?php } ?>
                                    <br />
                                    <div class="uk-form-file md-btn md-btn-primary">
                                        Select
                                        <input id="form-file" type="file" id="file2" name="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="uk-margin-medium-bottom">
                        <label for="task_assignee" class="uk-form-label">Event Status</label>
                        <select class="uk-form-width-medium" name="status" placeholder="<?= rebackPost('status', $datadb['status']) ?>" id="status" data-md-selectize-inline>
                            <option value="">-- Select Status --</option>
                            <option value="soon">Comming Soon</option>
                            <option value="past">Past Event</option>
                        </select>
                    </div> -->
                    <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                        <div class="uk-input-group">
                            <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                            <a href="javascript:window.history.go(-1);" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                        </div>
                    </div>
                </form>
        <?php endif; ?>
    </div>
</div>



<!-- tablesorter -->
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

<!--  table functions -->
<script src="<?= config_item('assets_js') ?>pages/pages_issues.min.js"></script>

<!-- kendo UI -->
<script src="<?= config_item('assets_js') ?>kendoui_custom.min.js"></script>

<!--  kendoui functions -->
<script src="<?= config_item('assets_js') ?>pages/kendoui.min.js"></script>

<script type="text/javascript">
/**
 * @desc Event onclick remove selected row on Master Data Table
 * used on every master data table
 */
$('.act-remove-table').click(function(){
    if( confirm('Are you sure want to remove this data ?') ){
        window.location = $(this).attr('data-url');
    }
});
</script>