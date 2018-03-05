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
                                <th>Kelas</th>
                                <th>Foto Jadwal</th>
                                <th>Tahun Ajaran</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Kelas</th>
                                <th>Foto Jadwal</th>
                                <th>Tahun Ajaran</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php 
                        if( count($jadwal) > 0 ){
                            foreach($jadwal as $row){                         
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['jadwal_id'].'</span></td>
                                        <td>
                                            <a href="'.base_url($this->app_name).'/edit/'.$row['jadwal_id'].'">'.$row['kd_jenjang_smk'].'-'.$row['kelas_id'].'</a>
                                        </td>
                                        <td><img src="'.$row['file'].'"></td>
                                        <td>'.$row['tahun_ajar'].'</td>
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
                                        <td>
                                           
                                        </td>
                                        <td><span class="uk-text-danger">Tidak ada event</span></td>
                                        <td></td>                                        
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-accent" href="<?= base_url($this->app_name) ?>/add">
                    <i class="material-icons">&#xE145;</i>
                </a>
            </div>                    
        </div>
        <ul class="uk-pagination ts_pager">
            <li data-uk-tooltip title="Select Page">
                <select class="ts_gotoPage ts_selectize"></select>
            </li>
            <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
            <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
            <li><span class="pagedisplay"></span></li>
            <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
            <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
            <li data-uk-tooltip title="Page Size">
                <select class="pagesize ts_selectize">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </li>
        </ul>
        <?php elseif( $this->initial_template == 'add' ): ?>
            <form action="<?= base_url('app_jadwal/add') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Jenjang</label>
                    <select class="uk-form-width-medium" data-md-selectize-inline name="id_kelas_jurusan" required>
                        <option value="">Pilih Jenjang</option>
                        <?php foreach ($kelas as $k): ?>
                            <option value="<?php echo $k['id_kelas_jurusan']; ?>"><?php echo $k['kd_jenjang_smk'].' '.$k['kelas_id']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Tahun Ajaran</label>
                    <input type="text" class="md-input" name="tahun_ajar" />
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
                    <select class="uk-form-width-medium" data-md-selectize-inline name="id_kelas_jurusan" required>
                <option value="">Pilih Jenjang</option>
                <?php foreach ($kelas as $k): ?>
                <option value="<?php echo $k['id_kelas_jurusan'];?>" <?php if ($k['id_kelas_jurusan'] == $datadb['id_kelas_jurusan']) {echo "selected";} ?>><?php echo $k['kd_jenjang_smk'].' '.$k['kelas_id']; ?></option>
                <?php endforeach ?>
            </select>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Tahun Ajaran</label>
                    <input type="text" class="md-input" name="tahun_ajar" value="<?= rebackPost('tahun_ajar', $datadb['tahun_ajar']) ?>" />
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
                            <a href="javascript:;"  class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light act-remove-table" data-url="<?php $initTable = $datadb['jadwal_id']; echo  base_url($this->app_name).'/remove/'.$initTable; ?>" title="Remove">Delete</a>
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