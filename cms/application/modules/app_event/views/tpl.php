<span>&nbsp;</span>
<span>&nbsp;</span>
<span>&nbsp;</span>
<span>&nbsp;</span>


<div class="md-card">
    <div class="md-card-content">
        <div class="uk-overflow-container uk-margin-bottom">
            <h3 class="heading_e">Event</h3>
            <!-- OUTPUT MESSAGE -->
            <?= $this->messagecontroll->showMessage() ?>
                <!-- OUTPUT MESSAGE -->
                <?php if( $this->initial_template == '' ): ?>
                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
                        <thead>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Event Title</th>
                                <th>Event Place</th>
                                <th>Event Date Start</th>
                                <th>Event Date End</th>
                                <th>Event Pict</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Event Title</th>
                                <th>Event Place</th>
                                <th>Event Date Start</th>
                                <th>Event Date End</th>
                                <th>Event Pict</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                        if( count($datadb) > 0 ){
                            foreach($datadb as $row){                         
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['event_id'].'</span></td>
                                        <td>
                                            <a href="'.base_url($this->app_name).'/edit/'.$row['event_id'].'">'.$row['event_title'].'</a>
                                        </td>
                                        <td>'.$row['event_place'].'</td>
                                        <td>'.date("Y-m-d", strtotime($row['event_date_start'])).'</td>
                                        <td>'.date("Y-m-d", strtotime($row['event_date_end'])).'</td>
                                        <td><img src="'.$row['event_pict'].'"></td>';
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
            <form action="<?= base_url('app_event/add') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Jenjang</label>
                    <select class="uk-form-width-medium" data-md-selectize-inline name="jenjang_id" required>
                        <option value="">Pilih Jenjang</option>
                        <option value="1">MI</option>
                        <option value="2">MTS</option>
                        <option value="3">SMK</option>
                    </select>


                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Name</label>
                    <input type="text" class="md-input" id="event_name"  name="event_title" />
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Event Place</label>
                    <input type="text" class="md-input" id="place"  name="event_place" />
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <label for="event_date">Select date</label>
                        <input class="md-input" type="text" id="event_date"  name="event_date_start" data-uk-datepicker="{format:'YYYY-MM-DD'}">                    
                    </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <label for="event_date">Select date</label>
                        <input class="md-input" type="text" id="event_date"  data-uk-datepicker="{format:'YYYY-MM-DD'}" name="event_date_end">                    
                    </div>
                </div>
                <br/>

                <div class="uk-margin-medium-bottom">
                    <label for="task_description">Description</label> <br/><br/>
                    <textarea class="md-input" id="desc" name="event_desc"></textarea>
                </div>
                
                <div class="md-card-content">
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-2">
                        <h5 class="heading_e">
                            Cover Photo (Event)<br />
                            Min. Size (607 x 501 px)
                        </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" id="file2" name="event_pict">
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
                        <label for="task_title">Event Name</label>
                        <input type="text" class="md-input" id="event_name" value="<?= rebackPost('event_name', $datadb['event_title']) ?>" name="event_title" />
                    </div>
                    <div class="uk-margin-medium-bottom">
                        <label for="task_title">Event Place</label>
                        <input type="text" class="md-input" id="place" value="<?= rebackPost('place', $datadb['event_place']) ?>" name="event_place" />
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label for="event_date">Select date</label>
                            <input class="md-input" type="text" id="event_date" value="<?= rebackPost('date', $datadb['event_date_start']) ?>" name="event_date_start" data-uk-datepicker="{format:'YYYY-MM-DD'}">                    
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label for="event_date">Select date</label>
                            <input class="md-input" type="text" id="event_date" value="<?= rebackPost('date', $datadb['event_date_end']) ?>" data-uk-datepicker="{format:'YYYY-MM-DD'}">                    
                        </div>
                    </div>
                    <br/>

                    <div class="uk-margin-medium-bottom">
                        <label for="task_description">Description</label> <br/><br/>
                        <textarea class="md-input" id="desc" name="event_desc"><?= rebackPost('desc', $datadb['event_desc']) ?></textarea>
                    </div>
                    
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
                                    if ($datadb['event_pict']) {?>
                                    <img src="<?php echo base_url().$datadb['event_pict']; ?>">    
                                    <?php }else{ ?>
                                    <img src="http://lorempixel.com/607/501">
                                    <?php } ?>
                                    <br />
                                    <div class="uk-form-file md-btn md-btn-primary">
                                        Select
                                        <input id="form-file" type="file" id="file2" name="event_pict">
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
                            <a href="javascript:;"  class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light act-remove-table" data-url="<?php $initTable = $datadb['event_id']; echo  base_url($this->app_name).'/remove/'.$initTable; ?>" title="Remove">Delete</a>
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